<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index()
    {
        return Animal::with('duenos')->get();
    }

    public function store(Request $request)
    {
        return Animal::create($request->all());
    }

    public function show($id)
    {
        return Animal::with('duenos')->findOrFail($id);
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
