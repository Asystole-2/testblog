<?php

namespace App\Http\Controllers;

use App\Models\Signup;
use Illuminate\Http\Request;
use App\Mail\ThankYouForVolunteering;
use Illuminate\Support\Facades\Mail;

class SignupController extends Controller
{
    public function create()
    {
        return view('get-involved'); // Create this view for the signup form
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:signups,email',
        ]);

        Signup::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ]);

        // Send thank you email
        Mail::to($request->email)->send(new ThankYouForVolunteering(
            $request->name,
            $request->email
        ));

        return redirect()->route('signup.success')->with('message', 'Signup successful! Check your email for confirmation.');
    }
}
