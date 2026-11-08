<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/photos', [PageController::class, 'photos'])->name('photos');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Ruta principal Home (pasando la variable $name)
Route::get('/', function () {
    return view('home', ['name' => 'Rommel']);
})->name('home');

// Ruta Photos
Route::get('/photos', function () {
    return view('photos');
})->name('photos');

// Ruta Contact
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Rutas de la actividad previa
Route::get('/child', function () {
    return view('child');
});

Route::get('/greeting', function () {
    return view('welcome', [
        'name' => 'Rommel',
        'records' => ['Record 1', 'Record 2']
    ]);
});