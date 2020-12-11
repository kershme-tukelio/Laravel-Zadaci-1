<?php

use Illuminate\Support\Facades\Route;
use App\Models\Car;
use App\Http\Controllers\CarController;

Route::get('/', function () {
    $name = 'Jovan';
    $age = 22;
    return view('welcome', ['name' => $name, 'age' => $age]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/cars', [CarController::class, 'index']);