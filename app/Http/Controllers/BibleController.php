<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BibleController extends Controller
{
    public function index()
    {
        $verses = [
            ['reference' => 'John 3:16', 'text' => 'For God so loved the world...'],
            ['reference' => 'Psalm 23:1', 'text' => 'The Lord is my shepherd; I shall not want.']
        ];
        return view('bible.index', compact('verses'));
    }

    public function show($verse)
    {
        return view('bible.verse', ['verse' => $verse]);
    }
}
