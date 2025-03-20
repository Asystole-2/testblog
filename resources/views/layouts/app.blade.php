<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Bible Doodle') }}</title>
    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@400;700&family=Fredoka+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <!-- Custom Styles -->
    <style>
        /* Original Body CSS */
        body {
            font-family: 'Comic Neue', cursive;
            background-color: #f9fafb;
        }
        .doodle-bg {
            background-image: url("https://www.transparenttextures.com/patterns/light-toast.png");
        }
        .doodle-button {
            background-color: skyblue;
            color: #333;
            border: 2px solid #333;
            border-radius: 15px;
            transition: all 0.3s ease;
            margin: 8px;
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
        .hero-bg {
            background-image: url("https://t3.ftcdn.net/jpg/06/33/38/88/360_F_633388889_VEg0OqXK3ZRAz22w4zOK7K1FWpbCi7Mg.jpg");
            background-size: cover;
            background-position: center;
        }
        .doodle-timeline {
            border-left: 4px solid #7B68EE;
            margin-left: 1rem;
            padding-left: 2rem;
        }

        .timeline-item {
            position: relative;
            margin-bottom: 3rem;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: -2.8rem;
            top: 0;
            width: 20px;
            height: 20px;
            background: #9370DB;
            border: 3px solid #fff;
            border-radius: 50%;
            box-shadow: 0 0 0 3px #9370DB;
        }

        /* New Header CSS */
        .doodle-header {
            background: linear-gradient(135deg, #9370DB 0%, #7B68EE 100%);
            border-bottom: 5px dashed #FFD700;
            position: relative;
        }
        @media (min-width: 769px) {
            .doodle-header {
                overflow: hidden;
            }
        }
        .logo {
            font-family: 'Fredoka One', cursive;
            text-shadow: 3px 3px 0 #FFD700;
            transition: transform 0.3s ease;
        }
        .logo:hover {
            transform: rotate(-3deg) scale(1.05);
        }
        .nav-link {
            position: relative;
            padding: 8px 15px;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 3px;
            background: #FFD700;
            transition: width 0.3s ease;
        }
        .nav-link:hover::after {
            width: 100%;
        }
        .mobile-menu-btn {
            display: none;
            background: #FFD700;
            border: 2px solid #333;
            border-radius: 10px;
            padding: 10px;
            box-shadow: 3px 3px 0 #333;
        }
        @media (max-width: 768px) {
            .nav-desktop { display: none; }
            .mobile-menu-btn { display: block; }
            .mobile-menu {
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background: linear-gradient(135deg, #9370DB 0%, #7B68EE 100%);
                z-index: 1000;
                padding: 1rem;
                transform-origin: top;
                animation: menuSlide 0.3s ease-out;
            }
            @keyframes menuSlide {
                from { transform: translateY(-20px); opacity: 0; }
                to { transform: translateY(0); opacity: 1; }
            }
            .mobile-nav {
                display: flex;
                flex-direction: column;
                gap: 1rem;
            }
        }
        .doctrine-nav-link {
            transition: all 0.2s ease;
            border: 2px solid #7B68EE;
        }

        .doctrine-nav-link:hover {
            transform: translateY(-2px);
            box-shadow: 3px 3px 0 #333;
        }

        .active-doctrine {
            background: #7B68EE !important;
            color: white !important;
            border-color: #5A4B9D;
        }
        /* Custom Form Elements */
        .doodle-header-gradient {
            background: linear-gradient(135deg, #9370DB 0%, #7B68EE 100%);
            border-bottom: 3px dashed #FFD700;
        }

        .doodle-input {
            @apply border-2 border-gray-300 rounded-xl p-3 focus:ring-2 focus:ring-purple-200 transition-all;
            focus:border-purple-500;
        }

        .doodle-checkbox {
            @apply rounded border-2 border-gray-300 text-purple-600 focus:ring-purple-500;
        }

        .doodle-alert-success {
            @apply bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded-lg;
        }

        .doodle-link {
            @apply text-purple-600  font-bold transition-colors;
            hover:text-purple-800;
        }
        .doodle-header-gradient {
            background: linear-gradient(135deg, #7B68EE 0%, #9370DB 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 2px 2px 0 #FFD700;
        }

        .post-image-hover {
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .doodle-alert-success {
            @apply bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded-lg;
        }

        .post-meta {
            @apply text-sm font-comic-neue text-purple-600;
        }
        /* Add to your existing CSS */
        .doodle-button.bg-red-500 {
            border: 2px solid #333;
            box-shadow: 3px 3px 0 #333;
            transition: all 0.3s ease;
        }

        .doodle-button.bg-red-500:hover {
            background-color: #e53e3e;
            transform: translateY(-2px);
            box-shadow: 5px 5px 0 #333;
        }

        .doodle-checkbox {
            border: 2px solid #333;
            border-radius: 5px;
            width: 1.2em;
            height: 1.2em;
        }

        .doodle-checkbox:checked {
            background-color: mediumpurple;
            border-color: #333;
        }

        .doodle-link {
            color: mediumpurple;
            text-decoration: underline solid mediumpurple;
            transition: color 0.3s ease;
        }

        .doodle-link:hover {
            color: #6b46c1;
        }
        .doodle-input {
            border: 2px solid #333; /* Always black border */
            border-radius: 8px;
            padding: 0.75rem;
            transition: all 0.3s ease;
            outline: none;
        }

        .doodle-input:focus {
            border-color: #9370DB; /* Purple when focused */
            box-shadow: 0 0 0 3px rgba(147, 112, 219, 0.3); /* Purple glow effect */
        }

        /* Keep red border for errors */
        .doodle-input.border-red-500 {
            border-color: #ef4444;
        }
        .doodle-input.border-red-500:focus {
            box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.3);
        }
        .doodle-alert-error {
            @apply bg-red-100 border-l-4 border-red-500 text-red-700 p-4 rounded-lg;
        }
    </style>
</head>
<body class="doodle-bg">
<div id="app">

    <!-- Enhanced Header -->
    <header class="doodle-header py-4 shadow-lg">
        <div class="container mx-auto flex justify-between items-center px-6">
            <!-- Logo -->
            <a href="{{ url('/') }}" class="logo text-3xl text-white">
                BibleDoodle ✍️
            </a>

            <!-- Desktop Navigation -->
            <nav class="nav-desktop flex items-center gap-6">
                <a class="nav-link text-white text-lg" href="{{ route('blog.index') }}">
                    <i class="fas fa-pencil-alt"></i> Blog
                </a>
                <a class="nav-link text-white text-lg" href="{{ route('study.index') }}">
                    <i class="fas fa-book-open"></i> Studies
                </a>
                <!-- Add Theology link here -->
                <a class="nav-link text-white text-lg" href="{{ route('theology') }}">
                    <i class="fas fa-church"></i> Theology & History
                </a>
                <a class="nav-link text-white text-lg" href="{{ route('about') }}">
                    <i class="fas fa-heart"></i> About
                </a>

                @auth
                    <a class="nav-link text-white text-lg" href="{{ route('profile') }}">
                        <i class="fas fa-user"></i> Profile
                    </a>
                    <!-- Mobile Logout Form -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="nav-link text-white text-lg w-full text-left">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </button>
                    </form>
                @else
                    <div class="flex gap-4">
                        <a class="doodle-button px-6 py-2 text-lg" href="{{ route('login') }}">
                            <i class="fas fa-key"></i> Login
                        </a>
                        @if (Route::has('register'))
                            <a class="doodle-button px-6 py-2 text-lg bg-pink-400" href="{{ route('register') }}">
                                <i class="fas fa-user-plus"></i> Register
                            </a>
                        @endif
                    </div>
                @endauth
            </nav>

            <!-- Mobile Menu Button -->
            <button class="mobile-menu-btn text-2xl" id="mobileMenuButton">
                <i class="fas fa-bars text-purple-800"></i>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div class="mobile-menu hidden container mx-auto px-6 py-4" id="mobileMenu">
            <nav class="mobile-nav">
                <a class="nav-link text-white text-lg" href="{{ route('blog.index') }}">
                    <i class="fas fa-pencil-alt"></i> Blog
                </a>
                <a class="nav-link text-white text-lg" href="{{ route('study.index') }}">
                    <i class="fas fa-book-open"></i> Studies
                </a>
                <!-- Add Theology link here -->
                <a class="nav-link text-white text-lg" href="{{ route('theology') }}">
                    <i class="fas fa-church"></i> Theology & History
                </a>
                <a class="nav-link text-white text-lg" href="{{ route('about') }}">
                    <i class="fas fa-heart"></i> About
                </a>

                @auth
                    <a class="nav-link text-white text-lg" href="{{ route('profile') }}">
                        <i class="fas fa-user"></i> Profile
                    </a>
                    <!-- Mobile Logout Form -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="nav-link text-white text-lg w-full text-left">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </button>
                    </form>
                @else
                    <a class="nav-link text-white text-lg" href="{{ route('login') }}">
                        <i class="fas fa-key"></i> Login
                    </a>
                    @if (Route::has('register'))
                        <a class="nav-link text-white text-lg" href="{{ route('register') }}">
                            <i class="fas fa-user-plus"></i> Register
                        </a>
                    @endif
                @endauth
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

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const mobileMenuButton = document.getElementById('mobileMenuButton');
        const mobileMenu = document.getElementById('mobileMenu');

        // Toggle menu
        mobileMenuButton.addEventListener('click', (e) => {
            e.stopPropagation();
            mobileMenu.classList.toggle('hidden');
        });

        // Close menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!mobileMenu.contains(e.target) && !mobileMenuButton.contains(e.target)) {
                mobileMenu.classList.add('hidden');
            }
        });

        // Close menu on resize and orientation change
        window.addEventListener('resize', handleResize);
        window.addEventListener('orientationchange', handleResize);

        function handleResize() {
            if (window.innerWidth > 768) {
                mobileMenu.classList.add('hidden');
            }
        }
    });
</script>
</body>
</html>
