@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold mb-8 text-center">Church History Timeline</h1>

        <!-- Era Summary -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-12">
            @foreach($eras as $era)
                <div class="doodle-card p-4 text-center">
                    <h3 class="text-xl font-bold">{{ $era->era }}</h3>
                    <p>{{ $era->event_count }} Events</p>
                </div>
            @endforeach
        </div>

        <!-- Timeline Events -->
        <div class="space-y-6">
            @foreach($events as $event)
                <div class="doodle-card p-6">
                    <div class="flex items-baseline gap-4 mb-2">
                        <span class="text-2xl font-bold text-purple-600">{{ $event->year }}</span>
                        <h2 class="text-xl font-semibold">{{ $event->event }}</h2>
                    </div>
                    <p class="text-gray-700 leading-relaxed">{{ $event->description }}</p>
                </div>
            @endforeach
        </div>
        <a href="{{ route('theology') }}" class="mt-6 inline-block doodle-button px-6 py-2">
            Back to Theology Hub
        </a>

        <!-- Pagination -->
        <div class="mt-8">
            {{ $events->links() }}
        </div>
    </div>
@endsection
