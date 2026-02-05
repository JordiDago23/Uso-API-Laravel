<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index()
    {
        return Animal::with('dueno')->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'tipo' => 'required|in:perro,gato,hámster,conejo',
            'peso' => 'required|numeric',
            'enfermedad' => 'nullable|string',
            'comentarios' => 'nullable|string',
            'dueno' => 'required|exists:duenos,id_persona',
        ]);

        return Animal::create($request->all());
    }

    public function show($id)
    {
        return Animal::with('dueno')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $animal = Animal::findOrFail($id);
        $animal->update($request->all());

        return $animal;
    }

    public function destroy($id)
    {
        Animal::destroy($id);
        return response()->json(['mensaje' => 'Animal eliminado']);
    }
}
