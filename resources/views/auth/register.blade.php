
{{-- Register View --}}
@extends('layouts.app')

@section('content')
    <main class="container mx-auto px-4 py-8 max-w-lg">
        <div class="doodle-card bg-white p-6 rounded-2xl shadow-xl">
            <header class="doodle-header-gradient text-white text-center py-4 rounded-xl mb-6">
                <h1 class="text-3xl font-fredoka">{{ __('Register') }}</h1>
            </header>

            <form class="space-y-6" method="POST" action="{{ route('register') }}">
                @csrf

                <div class="space-y-2">
                    <label class="block text-gray-700 font-comic-neue font-bold">{{ __('Name') }}</label>
                    <input id="name" type="text" name="name"
                           class="doodle-input w-full @error('name') border-red-500 @enderror"
                           value="{{ old('name') }}" required autofocus>
                    @error('name')<p class="text-red-500 text-sm">{{ $message }}</p>@enderror
                </div>

                <div class="space-y-2">
                    <label class="block text-gray-700 font-comic-neue font-bold">{{ __('Email') }}</label>
                    <input id="email" type="email" name="email"
                           class="doodle-input w-full @error('email') border-red-500 @enderror"
                           value="{{ old('email') }}" required>
                    @error('email')<p class="text-red-500 text-sm">{{ $message }}</p>@enderror
                </div>

                <div class="space-y-2">
                    <label class="block text-gray-700 font-comic-neue font-bold">{{ __('Password') }}</label>
                    <input id="password" type="password" name="password"
                           class="doodle-input w-full @error('password') border-red-500 @enderror" required>
                    @error('password')<p class="text-red-500 text-sm">{{ $message }}</p>@enderror
                </div>

                <div class="space-y-2">
                    <label class="block text-gray-700 font-comic-neue font-bold">{{ __('Confirm Password') }}</label>
                    <input id="password-confirm" type="password" name="password_confirmation"
                           class="doodle-input w-full" required>
                </div>

                <button type="submit" class="doodle-button w-full py-3 text-lg">
                    {{ __('Register') }}
                </button>

                <p class="text-center mt-4 font-comic-neue">
                    {{ __('Already have an account?') }}
                    <a class="doodle-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </p>
            </form>
        </div>
    </main>
@endsection
