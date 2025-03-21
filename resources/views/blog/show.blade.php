
@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="doodle-card p-6 rounded-2xl shadow-xl">
            <div class="mb-8">
                <h1 class="text-4xl font-fredoka text-purple-900">
                    {{ $post->title }}
                </h1>
            </div>
            <div class="prose max-w-none">
                <div class="text-lg font-comic-neue text-gray-700">
                    {!! nl2br(e($post->description)) !!}
                </div>
            </div>
            <img src="{{ asset('images/' . $post->image_path) }}" alt="{{ $post->title }}">
            <span class="text-sm font-comic-neue text-purple-700 mt-2 block">
                  By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>,
               Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
            </span>
        </div>
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
    <a href="{{ route('blog.index') }}" class="doodle-button mb-6 inline-block px-4 py-2">    Back
    </a>
@endsection
