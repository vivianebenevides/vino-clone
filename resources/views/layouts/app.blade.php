<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/global.css')}}" />
    <!-- Scripts pour VueJs -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>Administration</title>
</head>
<body>
    <div id="app">
       
            @yield('content')
            
    </div>
</body>
</html>