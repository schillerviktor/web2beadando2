<?php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $clubs = Club::latest()->paginate(5);

        return view('clubs.index',compact('clubs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('clubs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        Club::create($request->all());

        return redirect()->route('clubs.index')
            ->with('success','Klub létrehozása sikeres');
    }

    /**
     * Display the specified resource.
     *
     * @param  Club $club
     * @return Response
     */
    public function show(Club $club)
    {
        return view('clubs.show',compact('club'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Club $club
     * @return Response
     */
    public function edit(Club $club)
    {
        return view('clubs.edit',compact('club'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  Club $club
     * @return Response
     */
    public function update(Request $request, Club $club)
    {
        $request->validate([
            'csapatnev' => 'required'
        ]);

        $club->update($request->all());

        return redirect()->route('clubs.index')
            ->with('success','Klub neve frissítve');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Club $club
     * @return Response
     */
    public function destroy(Club $club)
    {
        $club->delete();

        return redirect()->route('clubs.index')
            ->with('success','Klub sikeresen törölve');
    }

    // API endpoints

    public function restList()
    {
        return Club::all();
    }

    public function restShow($id)
    {
        return Club::find($id);
    }

    public function restStore(Request $request)
    {
        return Club::create($request->all());
    }

    public function restUpdate(Request $request, $id)
    {
        $club = Club::findOrFail($id);
        $club->update($request->all());

        return $club;
    }

    public function restDelete(Request $request, $id)
    {
        $club = Club::findOrFail($id);
        $club->delete();

        return 204;
    }
}
