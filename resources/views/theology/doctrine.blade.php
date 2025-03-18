@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <!-- Doctrine Navigation -->
        <div class="mb-8 p-4 doodle-card">
            <h2 class="text-xl font-bold mb-4">Explore Doctrines</h2>
            <div class="flex flex-wrap gap-3">
                @foreach($allDoctrines as $key => $doctrine)
                    <a href="{{ route('theology.doctrine', $key) }}"
                       class="px-4 py-2 rounded-lg {{ $key === $currentTopic ? 'bg-purple-600 text-white' : 'doodle-button hover:bg-purple-100' }}">
                        {{ $doctrine['title'] }}
                    </a>
                @endforeach
            </div>
        </div>

        <!-- Main Content -->
        <h1 class="text-4xl font-bold mb-8">{{ $topic }}</h1>
        <div class="doodle-card p-6">
            <div class="prose max-w-none">
                {!! $content !!}
            </div>
        </div>

        <!-- Back Button -->
        <a href="{{ route('theology') }}" class="mt-6 inline-block doodle-button px-6 py-2">
            <i class="fas fa-arrow-left mr-2"></i>Back to Theology Hub
        </a>
    </div>
@endsection
