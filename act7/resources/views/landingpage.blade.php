@extends('layouts.app')

@section('content')
<div class="container text-center py-5">
    <h1 class="display-4 fw-bold">Bienvenido a Nuestra Aplicación</h1>
    <p class="lead text-muted">Esta es la Landing Page pública. Inicia sesión o regístrate para acceder al panel principal.</p>
    @guest
        <div class="mt-4">
            <a href="{{ route('login') }}" class="btn btn-primary btn-lg me-2">Iniciar Sesión</a>
            <a href="{{ route('register') }}" class="btn btn-outline-secondary btn-lg">Registrarse</a>
        </div>
    @endguest
</div>
@endsection