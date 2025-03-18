@extends('layouts.app')

@section('content')
    <main class="container mx-auto px-4 py-8 max-w-lg">
        <div class="doodle-card bg-white p-6 rounded-2xl shadow-xl">
            <header class="doodle-header-gradient text-white text-center py-4 rounded-xl mb-6">
                <h1 class="text-3xl font-fredoka">{{ __('Confirm Password') }}</h1>
            </header>

            <form class="space-y-6" method="POST" action="{{ route('password.confirm') }}">
                @csrf

                <p class="font-comic-neue text-gray-600">
                    {{ __('Please confirm your password before continuing.') }}
                </p>

                <div class="space-y-2">
                    <label class="block text-gray-700 font-comic-neue font-bold">{{ __('Password') }}</label>
                    <input id="password" type="password" name="password"
                           class="doodle-input w-full @error('password') border-red-500 @enderror" required>
                    @error('password')<p class="text-red-500 text-sm">{{ $message }}</p>@enderror
                </div>

                <div class="flex flex-col sm:flex-row sm:justify-between items-center gap-4">
                    <button type="submit" class="doodle-button w-full sm:w-auto px-8 py-3">
                        {{ __('Confirm Password') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="doodle-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Password?') }}
                        </a>
                    @endif
                </div>
            </form>
        </div>
    </main>
@endsection
