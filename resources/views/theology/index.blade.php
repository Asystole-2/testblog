@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold text-center mb-12">Christian Theology</h1>

        <div class="flex justify-center">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-2xl mx-auto">
                <a href="{{ route('theology.timeline') }}" class="doodle-card p-6 hover:transform hover:-translate-y-2 transition-all h-full">
                    <div class="text-center h-full flex flex-col justify-center">
                        <i class="fas fa-church text-4xl text-purple-600 mb-4"></i>
                        <h2 class="text-2xl font-bold mb-2">Church History Timeline</h2>
                        <p class="text-gray-600">Explore key events in Christian history</p>
                    </div>
                </a>

                <a href="{{ route('theology.doctrine', 'trinity') }}" class="doodle-card p-6 hover:transform hover:-translate-y-2 transition-all h-full">
                    <div class="text-center h-full flex flex-col justify-center">
                        <i class="fas fa-dove text-4xl text-blue-500 mb-4"></i>
                        <h2 class="text-2xl font-bold mb-2">Core Doctrines</h2>
                        <p class="text-gray-600">Understand essential theological teachings</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
