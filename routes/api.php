<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\DuenoController;

Route::apiResources([
    'animales' => AnimalController::class,
    'duenos' => DuenoController::class,  
]);