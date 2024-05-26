<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Panel de control</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    @include('components.nav_admin')
    <div class="flex items-center justify-center min-h-screen">
        <div class="max-w-7xl text-center">
            @if (Auth::check())
                <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">Bienvenido a la tienda BUTTERFLY, {{ Auth::user()->name }}, Puedes explorar las opciones del sistema en la parte superior de la pantalla.</h1>
            @endif
        </div>
    </div>
</body>
</html>
