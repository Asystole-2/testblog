<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Bible Doodle') }}</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@400;700&family=Fredoka+One&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <!-- Custom Styles -->
    <style>
        body {
            font-family: 'Comic Neue', cursive;
            background-color: #f9fafb;
        }
        .doodle-bg {
            background-image: url("https://www.transparenttextures.com/patterns/light-toast.png");
        }
        .doodle-header {
            background-color: mediumpurple;
            border-bottom: 5px dashed #ffcc00;
        }
        .doodle-button {
            background-color: skyblue;
            color: #333;
            border: 2px solid #333;
            border-radius: 15px;
            transition: all 0.3s ease;
        }
        .doodle-button:hover {
            background-color: plum;
            color: #fff;
            transform: scale(1.05);
        }
        .doodle-card {
            background-color: #fff;
            border: 3px solid #333;
            border-radius: 20px;
            box-shadow: 5px 5px 0 #333;
            transition: all 0.3s ease;
        }
        .doodle-card:hover {
            transform: translateY(-5px);
            box-shadow: 10px 10px 0 #333;
        }
        /* New Background Images */
        .hero-bg {
            background-image: url("https://t3.ftcdn.net/jpg/06/33/38/88/360_F_633388889_VEg0OqXK3ZRAz22w4zOK7K1FWpbCi7Mg.jpg");
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body class="doodle-bg">
<div id="app">
    <!-- Header -->
    <header class="doodle-header py-6 shadow-md">
        <div class="container mx-auto flex justify-between items-center px-6">
            <div>
                <a href="{{ url('/') }}" class="text-3xl font-bold text-white no-underline font-fredoka">
                    BibleDoodle❤✍
                </a>
            </div>
            <nav class="space-x-6 text-white text-sm sm:text-base">
                <a class="no-underline hover:text-yellow-300 transition" href="{{ route('blog.index') }}">Blog</a>
                <a class="no-underline hover:text-yellow-300 transition" href="{{ route('devotion.index') }}">Devotions</a>
                <a class="no-underline hover:text-yellow-300 transition" href="{{ route('study.index') }}">Studies</a>
                <a class="no-underline hover:text-yellow-300 transition" href="{{ route('about') }}">About</a>
                @guest
                    <a class="no-underline hover:text-yellow-300 transition" href="{{ route('login') }}">{{ __('Login') }}</a>
                    @if (Route::has('register'))
                        <a class="no-underline hover:text-yellow-300 transition" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                @else
                    <span class="text-white font-semibold">{{ Auth::user()->name }}</span>
                    <a href="{{ route('logout') }}"
                       class="no-underline hover:text-yellow-300 transition"
                       onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        {{ csrf_field() }}
                    </form>
                @endguest
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto mt-6 px-6">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('footer')
</div>
</body>
</html>
