<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actividad 11 - @yield('title')</title>
    <style>
        body { font-family: sans-serif; margin: 20px; }
        nav a { margin-right: 15px; text-decoration: none; color: #333; }
        nav a.active { font-weight: bold; color: #0056b3; border-bottom: 2px solid #0056b3; }
        .container { margin-top: 20px; min-height: 300px; }
        footer { margin-top: 40px; padding-top: 15px; border-top: 1px solid #ccc; font-size: 14px; }
    </style>
</head>
<body>
    <header>
        <nav>
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
            <a href="{{ route('photos') }}" class="{{ request()->routeIs('photos') ? 'active' : '' }}">Photos</a>
            <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
        </nav>
    </header>

    <hr>

    <main class="container">
        @yield('content')
    </main>

    <footer>
        <p>Elaborado por: <strong>Rommel Reyes</strong> - Activity 11 Laravel Blade</p>
    </footer>
</body>
</html>