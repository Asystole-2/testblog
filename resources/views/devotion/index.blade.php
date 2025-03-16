@extends('layouts.app')

@section('content')
    <h1 class="text-4xl font-bold text-gray-800 font-fredoka mb-8">Daily Devotions</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($devotions as $devotion)
            <div class="doodle-card p-6">
                <h2 class="text-2xl font-bold text-gray-800">{{ $devotion->title }}</h2>
                <p class="mt-2 text-gray-600">{{ $devotion->date->format('F j, Y') }}</p>
                <a href="{{ route('devotion.show', $devotion->id) }}"
                   class="mt-4 inline-block doodle-button text-sm font-bold py-2 px-4">
                    Read More
                </a>
            </div>
        @endforeach
    </div>
@endsection
