<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DuenoController extends Controller
{
    public function index()
    {
        return Dueno::with('animal')->get();
    }

    public function store(Request $request)
    {
        return Dueno::create($request->all());
    }

    public function show($id)
    {
        return Dueno::with('animal')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $dueno = Dueno::findOrFail($id);
        $dueno->update($request->all());
        return $dueno;
    }

    public function destroy($id)
    {
        Dueno::destroy($id);
        return response()->json(['mensaje' => 'Dueño eliminado']);
    }
}