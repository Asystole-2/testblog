@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto">
        <div class="doodle-card p-6">
            <h1 class="text-3xl font-bold mb-4">👤 Your Profile</h1>

            @if(session('success'))
                <div class="doodle-alert-success mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <div class="space-y-4 mb-6">
                <div>
                    <p class="text-lg font-semibold">Name:</p>
                    <p class="text-lg">{{ $user->name }}</p>
                </div>
                <div>
                    <p class="text-lg font-semibold">Email:</p>
                    <p class="text-lg">{{ $user->email }}</p>
                </div>
            </div>

            <div class="flex flex-col gap-4">
                <a href="{{ route('profile.edit') }}" class="doodle-button text-center px-6 py-2">
                    Edit Profile ✏️
                </a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="doodle-button w-full px-6 py-2 bg-red-100 hover:bg-red-200">
                        Log Out 🚪
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
