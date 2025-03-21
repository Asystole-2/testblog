<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Post $post): \Illuminate\Http\RedirectResponse
    {
        $request->validate(['body' => 'required|string|max:500']);

        $post->comments()->create([
            'body' => $request->body,
            'user_id' => auth()->id()
        ]);

        return back()->with('success', 'Comment added!');
    }
}
