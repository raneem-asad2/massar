<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    // Redirect to Google login
    public function googleLogin()
    {
        return Socialite::driver('google')->redirect();
    }

    // Handle Google callback
    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->stateless()->user();
        } catch (\Exception $e) {
            return redirect()->route('login')->withErrors('Google login failed. Please try again.');
        }

        $user = User::where('email', $googleUser->getEmail())->first();

        if ($user) {
            // Link Google account if not already linked
            if (!$user->google_id) {
                $user->google_id = $googleUser->getId();
                $user->save();
            }
        } else {
            // New user -> no password yet
            $user = User::create([
                'name'      => $googleUser->getName(),
                'email'     => $googleUser->getEmail(),
                'google_id' => $googleUser->getId(),
                'role_id'   => 3, // default role
                'password'  => null, // leave password NULL for now
            ]);
        }

        // Redirect to set password if no password
        if (!$user->password) {
            session(['google_user_id' => $user->id]);
            return redirect()->route('password.form');
        }

        // Log in if password exists
        Auth::login($user);

        // Redirect based on role
        if ($user->role && $user->role->role_name === 'admin') {
            return redirect()->route('admin.dashboard');
        }

        return redirect()->route('home.public');
    }
}
