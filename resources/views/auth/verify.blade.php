
{{-- Verify Email View --}}
@extends('layouts.app')

@section('content')
    <main class="container mx-auto px-4 py-8 max-w-lg">
        <div class="doodle-card bg-white p-6 rounded-2xl shadow-xl">
            <header class="doodle-header-gradient text-white text-center py-4 rounded-xl mb-6">
                <h1 class="text-3xl font-fredoka">{{ __('Verify Email') }}</h1>
            </header>

            <div class="space-y-4 font-comic-neue">
                @if (session('resent'))
                    <div class="doodle-alert-success">
                        {{ __('Verification link sent!') }}
                    </div>
                @endif

                <p>{{ __('Check your email for verification link') }}</p>

                <form method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <button type="submit" class="doodle-link">
                        {{ __('Resend Verification Email') }}
                    </button>
                </form>
            </div>
        </div>
    </main>
@endsection
