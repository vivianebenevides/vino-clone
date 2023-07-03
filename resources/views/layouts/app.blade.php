<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>Administration</title>
</head>
<body>
    <div id="app">
        <main>
            @yield('content')
        </main>      
    </div>
</body>
</html>