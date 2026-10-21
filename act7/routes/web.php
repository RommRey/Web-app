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
use App\Models\Order;

Route::get('/dashboard', function () {
    // Obtiene las órdenes del usuario que inició sesión
    $orders = Order::where('user_id', Auth::id())->get();

    return view('dashboard', compact('orders'));
})->middleware('auth')->name('dashboard');

// Redirección opcional de /home a /dashboard
Route::get('/home', function () {
    return redirect()->route('dashboard');
});