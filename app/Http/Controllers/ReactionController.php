<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class ReactionController extends Controller
{
    public function store(Request $request, Post $post)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Please login to react!');
        }

        $request->validate(['type' => 'required|in:like,dislike']);

        $post->reactions()->updateOrCreate(
            ['user_id' => auth()->id()],
            ['type' => $request->type]
        );

        return back()->withFragment('#reactions-'.$post->id);
    }
}
