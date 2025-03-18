@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto">
        <div class="doodle-card p-6">
            <h1 class="text-3xl font-bold mb-6">✏️ Edit Profile</h1>

            @if(session('success'))
                <div class="doodle-alert-success mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="{{ route('profile.update') }}">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label class="block text-lg mb-2">Name</label>
                    <input type="text" name="name" value="{{ old('name', $user->name) }}"
                           class="doodle-input w-full @error('name') border-red-500 @enderror">
                    @error('name')
                    <p class="text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block text-lg mb-2">Email</label>
                    <input type="email" name="email" value="{{ old('email', $user->email) }}"
                           class="doodle-input w-full @error('email') border-red-500 @enderror">
                    @error('email')
                    <p class="text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex gap-4">
                    <button type="submit" class="doodle-button px-6 py-2">
                        Save Changes 💾
                    </button>
                    <a href="{{ route('profile') }}" class="doodle-button px-6 py-2 bg-gray-200">
                        Cancel ❌
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
