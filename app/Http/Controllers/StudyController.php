<?php

namespace App\Http\Controllers;

use App\Models\Study;
use Illuminate\Http\Request;

class StudyController extends Controller
{
    public function index()
    {
        $studies = Study::all();
        return view('study.index', compact('studies'));
    }

    public function show(Study $study)
    {
        return view('study.show', compact('study'));
    }
}
