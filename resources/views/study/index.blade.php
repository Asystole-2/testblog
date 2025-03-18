@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold text-gray-800 font-fredoka mb-8">Bible Studies</h1>

        <!-- Video Section -->
        <div class="mt-12">
            <h2 class="text-3xl font-bold text-gray-800 font-fredoka mb-8">Featured Videos</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Video 1 -->
                <div class="doodle-card p-4">
                    <div class="relative" style="padding-bottom: 56.25%"> <!-- 16:9 aspect ratio -->
                        <iframe
                            class="absolute top-0 left-0 w-full h-full rounded-lg"
                            src="https://www.youtube.com/embed/ak06MSETeo4"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </div>
                    <div class="mt-4 p-2">
                        <h3 class="text-xl font-bold text-gray-800">What is the Bible</h3>
                        <p class="mt-2 text-gray-600">Discover what the Bible is: how it came to be and what it stands for.</p>
                    </div>
                </div>

                <!-- Video 2 -->
                <div class="doodle-card p-4">
                    <div class="relative" style="padding-bottom: 56.25%"> <!-- 16:9 aspect ratio -->
                        <iframe
                            class="absolute top-0 left-0 w-full h-full rounded-lg"
                            src="https://www.youtube.com/embed/7_CGP-12AE0"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </div>
                    <div class="mt-4 p-2">
                        <h3 class="text-xl font-bold text-gray-800">The Story of The Bible</h3>
                        <p class="mt-2 text-gray-600">Get insights into what the Bible fore-tells about God, Humanity, Sin and Salvation.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Studies Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-12">
            @foreach($studies as $study)
                <div class="doodle-card p-6">
                    <h2 class="text-2xl font-bold text-gray-800">{{ $study->topic }}</h2>
                    <p class="mt-2 text-gray-600">{{ Str::limit($study->description, 100) }}</p>
                    <a href="{{ route('study.show', $study->id) }}"
                       class="mt-4 inline-block doodle-button text-sm font-bold py-2 px-4">
                        Explore Study
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
