<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f8f8f8;
        }

        header {
            background-color: #2c3e50;
            color: #ecf0f1;
            padding: 1px;
            text-align: left;
        }

        nav {
            display: flex;
            justify-content: center;
            background-color: #34495e;
            padding: 0px;
        }

        nav a {
            color: #ecf0f1;
            text-decoration: none;
            padding: 12px 20px;
            margin: 0 10px;
            font-weight: bold;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        nav a:hover {
            background-color: #2c3e50;
        }

        section {
            padding: 40px;
            text-align: center;
            background-color: #ecf0f1;
        }

        h2 {
            color: #2c3e50;
        }

        p {
            color: #333;
            line-height: 1.6;
        }

        footer {
            background-color: #2c3e50;
            color: #ecf0f1;
            text-align: center;
            padding: -40px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>

    <nav>
    <a href="#"><img src="{{ url('../assets/images/a.jpeg') }}" style="height: 50px;"></a>
        <a href="#">Accueil</a>
        <a href="{{ route('zone') }}">Zones</a>
        <a href="{{ route('classe') }}">Classes</a>
        <a href="{{ route('horaire') }}">Horaire</a>
        <a href="{{ route('reservation') }}">Reservation</a>
       
        @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}"></a>
                        
                    @else
                        <a href="{{ route('login') }}">Connexion</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Inscription</a>
                        @endif
                    @endauth
            @endif
            @include('layouts.navigation')
    </nav>
    </head>
    <body class="font-sans antialiased" >
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900" style="background-image: url('../assets/images/a.jpeg'); background-size: cover; ">
          

            <!-- Page Heading -->
            <!-- @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif -->

            <!-- Page Content -->
            <main>
                
            </main>
        </div>
    </body>
</html>
