<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    public function index()
    {
        return Position::all();
    }

    public function show($id)
    {
        return Position::find($id);
    }

    public function store(Request $request)
    {
        return Position::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $position = Position::findOrFail($id);
        $position->update($request->all());

        return $position;
    }

    public function delete(Request $request, $id)
    {
        $position = Position::findOrFail($id);
        $position->delete();

        return 204;
    }
}
