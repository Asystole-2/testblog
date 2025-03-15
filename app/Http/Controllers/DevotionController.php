<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Devotion;

class DevotionController extends Controller
{
    public function index()
    {
        $devotions = Devotion::orderBy('date', 'desc')->get();
        return view('devotion.index', compact('devotions'));
    }

    public function show(Devotion $devotion)
    {
        return view('devotion.show', compact('devotion'));
    }
}
