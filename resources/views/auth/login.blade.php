@extends('layouts.app')

@section('content')
    <main class="container mx-auto px-4 py-8 max-w-lg">
        <div class="doodle-card bg-white p-6 rounded-2xl shadow-xl">
            <header class="doodle-header-gradient text-white text-center py-4 rounded-xl mb-6">
                <h1 class="text-3xl font-fredoka">{{ __('Login') }}</h1>
            </header>

            <form class="space-y-6" method="POST" action="{{ route('login') }}">
                @csrf

                <div class="space-y-2">
                    <label class="block text-gray-700 font-comic-neue font-bold">
                        {{ __('E-Mail Address') }}
                    </label>
                    <input id="email" type="email" name="email"
                           class="doodle-input w-full @error('email') border-red-500 @enderror"
                           value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')<p class="text-red-500 text-sm">{{ $message }}</p>@enderror
                </div>

                <div class="space-y-2">
                    <label class="block text-gray-700 font-comic-neue font-bold">
                        {{ __('Password') }}
                    </label>
                    <input id="password" type="password" name="password"
                           class="doodle-input w-full @error('password') border-red-500 @enderror" required>
                    @error('password')<p class="text-red-500 text-sm">{{ $message }}</p>@enderror
                </div>

                <div class="flex items-center justify-between">
                    <label class="flex items-center font-comic-neue">
                        <input type="checkbox" name="remember" class="doodle-checkbox"
                            {{ old('remember') ? 'checked' : '' }}>
                        <span class="ml-2">{{ __('Remember Me') }}</span>
                    </label>

                    @if (Route::has('password.request'))
                        <a class="doodle-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Password?') }}
                        </a>
                    @endif
                </div>

                <button type="submit" class="doodle-button w-full py-3 text-lg">
                    {{ __('Login') }}
                </button>

                @if (Route::has('register'))
                    <p class="text-center mt-4 font-comic-neue">
                        {{ __("Don't have an account?") }}
                        <a class="doodle-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </p>
                @endif
            </form>
        </div>
    </main>
@endsection
