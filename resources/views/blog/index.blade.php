@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <!-- Header -->
        <div class="text-center mb-12">
            <h1 class="text-5xl font-fredoka text-purple-800 mb-4 doodle-header-gradient py-4 rounded-xl">
                Blog Posts
            </h1>

            <!-- Filter Form -->
            <form class="mb-8 flex gap-4 justify-center items-end" method="GET" action="{{ route('blog.index') }}">
                <div class="flex-1 max-w-xs">
                    <input type="text" name="search" placeholder="Search posts by title..."
                           class="doodle-input w-full" value="{{ request('search') }}">
                </div>
                <div class="flex-1 max-w-xs">
                    <input type="date" name="date" class="doodle-input w-full"
                           value="{{ request('date') }}">
                </div>
                <button type="submit" class="doodle-button px-4 py-2 text-lg">Search</button>
                @if(request()->hasAny(['search', 'date']))
                    <a href="{{ route('blog.index') }}" class="doodle-button px-4 py-2 text-lg">
                       Show All
                    </a>
                @endif
            </form>

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
                        <div class="flex flex-col  overflow-hidden rounded-xl px-2 transition-all duration-300 bg-gray-50">
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

                                <!-- Collapsible Content Section -->
                                <div class="post-content font-comic-neue text-gray-600 text-lg overflow-y-hidden max-h-60 transition-all duration-300">
                                    <p class="leading-relaxed">
                                        {{ $post->description }}
                                    </p>
                                </div>
                                <h2>• • •</h2>
                            </div>

                        </div>

                        <!-- Action Buttons -->
                        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 pt-4">
                            <a href="/blog/{{ $post->slug }}" class="doodle-button px-3 py-1 text-lg">
                                📖 Keep Reading
                            </a>

                            @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                                <div class="flex gap-4">
                                    <a href="/blog/{{ $post->slug }}/edit"
                                       class="doodle-link text-sm px-4 py-2 border-2 border-purple-200 rounded-lg hover:bg-red-50">
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
                    <!-- Reactions Section -->
                    <div class="reactions flex gap-4 mt-4" id="reactions-{{ $post->id }}">
                        <form method="POST"
                              action="{{ route('posts.reaction', $post) }}">                            @csrf
                            <button name="type" value="like"
                                    class="doodle-button hover:bg-green-100 px-3 py-1 text-lg"
                                    @guest disabled title="Login to react" @endguest>
                                👍 {{ $post->likes->count() }}
                            </button>
                            <button name="type" value="dislike"
                                    class="doodle-button hover:bg-red-100 px-3 py-1 text-lg"
                                    @guest disabled title="Login to react" @endguest>
                                👎 {{ $post->dislikes->count() }}
                            </button>
                        </form>
                    </div>

                    <!-- Comments Section -->
                    <div class="comments mt-6">
                        <h3 class="text-2xl mb-4">Comments</h3>

                        @auth
                            <form method="POST" action="/posts/{{ $post->slug }}/comments" class="mb-6">
                                @csrf
                                <textarea name="body" class="doodle-input mb-2 w-full"
                                          placeholder="Add a comment..." rows="3"></textarea>
                                <button class="doodle-button px-3 py-1">Post Comment</button>
                            </form>
                        @else
                            <div class="mb-6 p-4 doodle-card">
                                <p class="text-gray-600 mb-2">Want to join the discussion?</p>
                                <a href="{{ route('login') }}" class="doodle-button inline-block">
                                    🔑 Login to Comment
                                </a>
                            </div>
                        @endauth

                        @forelse($post->comments as $comment)
                            <div class="doodle-card p-4 my-4">
                                <div class="flex items-center gap-2 mb-2">
                                    <img src="{{ $comment->user->avatar ?? asset('images/default-avatar.png') }}"
                                         class="w-8 h-8 rounded-full">
                                    <strong>{{ $comment->user->name }}</strong>
                                    <span class="text-sm text-gray-500">
                    {{ $comment->created_at->diffForHumans() }}
                                    </span>

                                </div>
                                <p class="text-gray-700">{{ $comment->body }}</p>
                            </div>
                        @empty
                            <p class="text-gray-500 italic p-4 doodle-card">
                                No comments yet. Be the first to share your thoughts!
                            </p>
                        @endforelse
                    </div>

                </div>
            @endforeach
        </div>
    </div>

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

        button[disabled] {
            opacity: 0.5;
            cursor: not-allowed;
        }
    </style>
@endsection
