<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use PDF;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $players = Player::all();
        return view('players.index', compact('players'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $clubs = json_decode(Route::dispatch(Request::create('/api/clubs', 'GET'))->getContent());
        $positions = json_decode(Route::dispatch(Request::create('/api/positions', 'GET'))->getContent());
        return view('players.create', compact('clubs', 'positions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validateRequest($request);
        Player::create($request->all());

        return redirect()->route('players.index')
            ->with('success','Klub létrehozása sikeres');
    }

    /**
     * Display the specified resource.
     *
     * @param  Player $player
     * @return Response
     */
    public function show(Player $player)
    {
        return view('players.show',compact('player'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Player $player
     * @return Response
     */
    public function edit(Player $player)
    {
        $clubs = json_decode(Route::dispatch(Request::create('/api/clubs', 'GET'))->getContent());
        $positions = json_decode(Route::dispatch(Request::create('/api/positions', 'GET'))->getContent());
        return view('players.edit', compact('player', 'clubs', 'positions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  Player $player
     * @return Response
     */
    public function update(Request $request, Player $player)
    {
        $this->validateRequest($request);
        $player->update($request->all());

        return redirect()->route('players.index')
            ->with('success','Klub neve frissítve');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Player $player
     * @return Response
     */
    public function destroy(Player $player)
    {
        $player->delete();

        return redirect()->route('players.index')
            ->with('success','Klub sikeresen törölve');
    }

    private function validateRequest(Request $request) {
        if ($request->input('nationality') == 1) {
            $request->merge(['magyar' => 1, 'kulfoldi' => 0]);
        } else {
            $request->merge(['magyar' => 0, 'kulfoldi' => 1]);
        }

        $request->validate([
            'vezeteknev' => 'required',
            'utonev' => 'required',
            'mezszam' => 'required',
            'klubid' => 'required',
            'posztid' => 'required',
            'szulido' => 'required',
            'magyar' => 'required',
            'kulfoldi' => 'required',
            'ertek' => 'required',
        ]);
    }

    public function playerDetails() {
        $clubs = json_decode(Route::dispatch(Request::create('/api/clubs', 'GET'))->getContent());
        return view('players.details', compact( 'clubs'));
    }

    public function generatePdf(Request $request) {
        $html_content = $request->html;
        PDF::SetTitle('Filtered players');
        PDF::AddPage();
        PDF::writeHTML($html_content, true, false, true, false, '');

        PDF::Output('jatekosok.pdf');
    }

    public function table() {
        $table = Http::get('https://619c087d68ebaa001753c74a.mockapi.io/api/list')->json();
        $names = array_reduce($table, function ($carry, $item) {
            $carry[] = $item["name"];
            return $carry;
        });
        $points = array_reduce($table, function ($carry, $item) {
            $carry[] = $item["points"];
            return $carry;
        });
        return view('players.table.index', compact( 'table', 'names', 'points'));
    }

    public function saveTable(Request $request) {
        Http::post('https://619c087d68ebaa001753c74a.mockapi.io/api/list', [
            'name' => $request["name"],
            'played' => $request["played"],
            'win' => $request["win"],
            'draw' => $request["draw"],
            'defeat' => $request["defeat"],
            'goals' => $request["goals"],
            'points' => $request["points"],
        ]);

        return redirect()->route('table')
            ->with('success','Csapat hozzáadva a tabellához');
    }

    public function showCreateTable() {
        return view('players.table.create');
    }

    public function showEditTable(Request $request, $id) {
        $table = Http::get('https://619c087d68ebaa001753c74a.mockapi.io/api/list/' . $id)->json();
        return view('players.table.edit', compact( 'table'));
    }

    public function modifyTable(Request $request) {
        Http::put('https://619c087d68ebaa001753c74a.mockapi.io/api/list/' . $request["id"], [
            'name' => $request["name"],
            'played' => $request["played"],
            'win' => $request["win"],
            'draw' => $request["draw"],
            'defeat' => $request["defeat"],
            'goals' => $request["goals"],
            'points' => $request["points"],
        ]);
        return redirect()->route('table')->with('success','Sikeres módosítás');
    }

    public function deleteTable(Request $request) {
        Http::delete('https://619c087d68ebaa001753c74a.mockapi.io/api/list/' . $request["id"]);
        return redirect()->route('table')->with('success','Sikeres törlés');
    }

    // API endpoints

    public function restList()
    {
        return Player::all();
    }

    public function restShow($id)
    {
        return Player::find($id);
    }

    public function restStore(Request $request)
    {
        return Player::create($request->all());
    }

    public function restUpdate(Request $request, $id)
    {
        $player = Player::findOrFail($id);
        $player->update($request->all());

        return $player;
    }

    public function restDelete(Request $request, $id)
    {
        $player = Player::findOrFail($id);
        $player->delete();

        return 204;
    }

    function restGetPlayersOfInterval(Request $request) {
        $bdayFrom = $request->bdayFrom;
        $bdayTo = $request->bdayTo;
        $clubId = $request->clubId;
        $players =
            Player::whereBetween('szulido', [$bdayFrom, $bdayTo])
                ->join('poszt', 'poszt.id', '=', 'labdarugo.posztid')
                ->where('klubid', $clubId)
                ->get();
        return $players;
    }
}
