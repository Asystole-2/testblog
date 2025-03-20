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

                <div class="relative my-6">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t-2 border-dashed border-gray-300"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-2 bg-white text-gray-500 font-comic-neue">Or continue with</span>
                    </div>
                </div>

                <a href="{{ route('google.login') }}"
                   class="doodle-button bg-red-500 hover:bg-red-600 text-white w-full py-3 text-lg flex items-center justify-center gap-2">
                    <svg class="w-6 h-6" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M12.545 10.239v3.821h5.445c-.712 2.315-2.647 3.972-5.445 3.972a6.033 6.033 0 110-12.064c1.835 0 3.456.989 4.567 2.951l3.083-2.428C17.52 2.702 15.08 1.5 12.545 1.5c-4.779 0-8.727 3.536-8.727 8.5 0 4.687 3.445 8.5 8.727 8.5 4.898 0 8.182-3.405 8.182-8.295 0-1.305-.201-2.292-.201-2.292H12.545z"/>
                    </svg>
                    {{ __('Continue with Google') }}
                </a>
                @if ($errors->any())
                    <div class="doodle-alert-error mb-4">
                        {{ $errors->first() }}
                    </div>
                @endif
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
