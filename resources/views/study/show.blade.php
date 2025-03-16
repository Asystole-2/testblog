@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-6 py-12">
        <div class="doodle-card p-8">
            <h1 class="text-4xl font-bold text-gray-800 font-fredoka mb-4">{{ $study->topic }}</h1>
            <p class="text-gray-600 text-lg leading-relaxed">{{ $study->description }}</p>
            <a href="{{ route('study.index') }}"
               class="mt-6 inline-block doodle-button text-sm font-bold py-2 px-4">
                Back to Studies
            </a>
        </div>
    </div>
@endsection
