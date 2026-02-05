<?php

namespace App\Http\Controllers;

use App\Models\Dueno;
use Illuminate\Http\Request;

class DuenoController extends Controller
{
    public function index()
    {
        return Dueno::with('animales')->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
        ]);

        return Dueno::create($request->all());
    }

    public function show($id)
    {
        return Dueno::with('animales')->findOrFail($id);
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