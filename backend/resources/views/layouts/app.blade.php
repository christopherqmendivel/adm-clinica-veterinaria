<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre de tu aplicación</title>
    <!-- Estilos CSS, scripts, etc. -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <header>
        <!-- Navbar u otros elementos comunes -->
    </header>

    <main class="py-4">
        @yield('content')
    </main>

    <footer>
        <!-- Pie de página -->
    </footer>

    <!-- Scripts JS -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>