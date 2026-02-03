<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Dueno;
use App\Models\Animal;

Route::get('/duenos', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
