@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="card shadow-sm mb-4">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Panel de Control (Dashboard)</h4>
        </div>
        <div class="card-body">
            <h5>¡Hola, {{ Auth::user()->name }}!</h5>
            <p>Bienvenido a tu panel de usuario protegido. Solo los usuarios autenticados pueden ver esta página.</p>
        </div>
    </div>

    <!-- Sección de Pedidos -->
    <div class="card shadow-sm">
        <div class="card-header bg-dark text-white">
            <h5 class="mb-0">Mis Pedidos</h5>
        </div>
        <div class="card-body">
            @if($orders->isEmpty())
                <p class="text-muted mb-0">No tienes pedidos registrados en este momento.</p>
            @else
                <div class="row">
                    @foreach($orders as $order)
                        <div class="col-md-4 mb-3">
                            <div class="card h-100 border">
                                @if($order->status_picture)
                                    <img src="{{ $order->status_picture }}" class="card-img-top" alt="Imagen de estado" style="max-height: 180px; object-fit: cover;">
                                @endif
                                <div class="card-body">
                                    <h6 class="card-title fw-bold">Pedido #{{ $order->id }}</h6>
                                    <p class="card-text mb-1">
                                        <strong>Estado:</strong> 
                                        <span class="badge bg-info text-dark">{{ $order->status }}</span>
                                    </p>
                                    <p class="card-text text-muted small">
                                        Fecha: {{ $order->created_at ? $order->created_at->format('d/m/Y H:i') : 'N/A' }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</div>
@endsection