<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Forzar a Laravel a generar todas las URLs en HTTPS y aceptar el proxy de Codespaces
        if (isset($_SERVER['HTTP_X_FORWARDED_HOST']) || config('app.env') === 'local') {
            URL::forceScheme('https');
        }
    }
}