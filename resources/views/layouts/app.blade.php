<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Bible Study Blog') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
<div id="app">
    <header class="bg-gray-800 py-6">
        <div class="container mx-auto flex justify-between items-center px-6">
            <div>
                <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                    {{ config('app.name', 'Bible Study Blog') }}
                </a>
            </div>
            <nav class="space-x-4 text-gray-300 text-sm sm:text-base">
                <a class="no-underline hover:underline" href="/">Home</a>
                <a class="no-underline hover:underline" href="/blog">Blog</a>
                <a class="no-underline hover:underline" href="/devotion">Devotions</a>
                <a class="no-underline hover:underline" href="/study">Bible Studies</a>
                <a class="no-underline hover:underline" href="/about">About</a>

                @guest
                    <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                    @if (Route::has('register'))
                        <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                @else
                    <span>{{ Auth::user()->name }}</span>

                    <a href="{{ route('logout') }}"
                       class="no-underline hover:underline"
                       onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        {{ csrf_field() }}
                    </form>
                @endguest
            </nav>
        </div>
    </header>

    <main class="container mx-auto mt-6 px-6">
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-gray-300 py-4 mt-6 text-center">
        @include('layouts.footer')
    </footer>
</div>
</body>
</html>
