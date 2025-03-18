@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-5xl font-fredoka text-purple-800 mb-4 doodle-header-gradient py-4 rounded-xl">
                Blog Posts
            </h1>

            @if (Auth::check())
                <a href="/blog/create" class="doodle-button inline-block px-8 py-3 text-lg mb-8">
                    ✍️ Create Post
                </a>
            @endif
        </div>

        <!-- Success Message -->
        @if (session()->has('message'))
            <div class="doodle-alert-success max-w-2xl mx-auto mb-8">
                {{ session()->get('message') }}
            </div>
        @endif

        <!-- Posts Grid -->
        <div class="space-y-8 max-w-4xl mx-auto">
            @foreach ($posts as $post)
                <div class="doodle-card p-6 rounded-2xl shadow-xl">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                        <!-- Image Container -->
                        <div class="h-64 md:h-96 overflow-hidden rounded-xl border-4 border-purple-200">
                            <img src="{{ asset('images/' . $post->image_path) }}" alt="{{ $post->title }}"
                                 class="w-full h-full object-cover hover:scale-105 transition-transform">
                        </div>

                        <!-- Content Container -->
                        <div class="flex flex-col justify-between h-64 md:h-96 overflow-hidden transition-all duration-300">
                            <div>
                                <h2 class="text-3xl font-fredoka text-purple-900 mb-4">
                                    {{ $post->title }}
                                </h2>

                                <div class="mb-4">
                            <span class="text-sm font-comic-neue text-purple-600">
                                By <span class="font-bold">{{ $post->user->name }}</span>,
                                {{ $post->updated_at->format('F jS, Y') }}
                            </span>
                                </div>

                                <!-- Collapsible Content -->
                                <div class="post-content font-comic-neue text-gray-600 text-lg overflow-y-hidden max-h-32">
                                    <p class="leading-relaxed">
                                        {{ $post->description }}
                                    </p>
                                </div>
                            </div>

                            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                                <a href="/blog/{{ $post->slug }}" class="doodle-button px-6 py-4 text-lg">
                                    📖 Keep Reading
                                </a>

                                @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                                    <div class="flex gap-4">
                                        <a href="/blog/{{ $post->slug }}/edit"
                                           class="doodle-link text-sm px-4 py-2 border-2 border-purple-200 rounded-lg">
                                            ✏️ Edit
                                        </a>
                                        <form action="/blog/{{ $post->slug }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit"
                                                    class="doodle-link text-red-600 text-sm px-4 py-2 border-2 border-red-100 rounded-lg hover:bg-red-50">
                                                🗑 Delete
                                            </button>
                                        </form>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script>
        function toggleReadMore(button) {
            const card = button.closest('.doodle-card');
            const content = card.querySelector('.post-content');
            const isExpanded = content.classList.contains('max-h-32');

            content.classList.toggle('max-h-32', !isExpanded);
            content.classList.toggle('max-h-[500px]', isExpanded);
            button.textContent = isExpanded ? '📖 Read More' : '📖 Read Less';

            // Scroll to show more content if needed
            if(isExpanded) {
                card.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            }
        }
    </script>

    <style>
        .post-content {
            transition: max-height 0.3s ease-in-out;
            overflow-y: hidden;
        }

        .post-content::-webkit-scrollbar {
            width: 5px;
        }

        .post-content::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 4px;
        }

        .post-content::-webkit-scrollbar-thumb {
            background: #9370DB;
            border-radius: 4px;
        }
    </style>
@endsection
