<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DevotionController extends Controller
{
    public function index()
    {
        $devotions = [
            ['title' => 'God’s Love', 'content' => 'God’s love is unconditional...'],
            ['title' => 'Trust in the Lord', 'content' => 'Trust in the Lord with all your heart...']
        ];
        return view('devotion.index', compact('devotions'));
    }
}
