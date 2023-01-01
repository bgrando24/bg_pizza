<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <!-- Because the 'public' folder is made available to the browser at root level, we don't need to specify './public/...' -->
        <link href="/css/main.css" rel="stylesheet">
    
    </head>
    <body class="antialiased">

        <!-- We defined content of the same name in the view files, this tells blade where to insert it in the layout file -->
        @yield('content')


        <footer>
            Copyright 2022 BG's Pizza
        </footer>

    </body>
</html>