<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BG's Pizza</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="/css/main.css" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/scss/app.scss' , 'resources/js/app.js'])
    
    </head>
    <body class="antialiased">

        @yield('content')


        <footer>
            Copyright 2022 BG's Pizza
        </footer>

    </body>
</html>