<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')
            ->scopes(['openid', 'profile', 'email'])
            ->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();

            // Check if user exists by email first
            $user = User::where('email', $googleUser->email)->first();

            if ($user) {
                // Update existing user with Google credentials
                $user->update([
                    'google_id' => $googleUser->id,
                    'avatar' => $googleUser->avatar
                ]);
            } else {
                // Create new user
                $user = User::create([
                    'name' => $googleUser->name,
                    'email' => $googleUser->email,
                    'google_id' => $googleUser->id,
                    'avatar' => $googleUser->avatar,
                    'password' => bcrypt(uniqid()) // Temporary password
                ]);
            }

            Auth::login($user, true);

            return redirect()->intended('/');

        } catch (\Exception $e) {
            \Log::error('Google Auth Error: ', ['error' => $e]);
            return redirect()->route('login')
                ->with('error', 'Google authentication failed: '.$e->getMessage());
        }
    }
}
