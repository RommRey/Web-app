@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Panel de Control (Dashboard)</h4>
        </div>
        <div class="card-body">
            <h5>¡Hola, {{ Auth::user()->name }}!</h5>
            <p>Bienvenido a tu panel de usuario protegido. Solo los usuarios autenticados pueden ver esta página.</p>
        </div>
    </div>
</div>
@endsection