<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudyController extends Controller
{
    public function index()
    {
        $topics = ['Faith', 'Salvation', 'Prayer', 'Holy Spirit'];
        return view('study.index', compact('topics'));
    }

    public function show($topic)
    {
        return view('study.topic', ['topic' => ucfirst($topic)]);
    }
}
