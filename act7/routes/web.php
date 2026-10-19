<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// 1. La ruta raíz pública (invitados) muestra la Landing Page
Route::get('/', function () {
    return view('landingpage');
});

// Rutas de Autenticación de Laravel
Auth::routes();

// 2 y 4. Ruta protegida del Dashboard (solo usuarios autenticados)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

// Redirección opcional de /home a /dashboard
Route::get('/home', function () {
    return redirect()->route('dashboard');
});