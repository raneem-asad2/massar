<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class SocialiteController extends Controller
{
    // Redirect to Google login
    public function googleLogin()
    {
        return Socialite::driver('google')->redirect();
    }

    // Handle callback from Google
    public function handleGoogleCallback()
{
    try {
        // Use stateless() to avoid state issues in local development
        $googleUser = Socialite::driver('google')->stateless()->user();
    } catch (\Exception $e) {
        return redirect()->route('login')->withErrors('Google login failed. Please try again.');
    }

    // Check if user already exists by Google ID or email
    $user = User::where('google_id', $googleUser->getId())
                ->orWhere('email', $googleUser->getEmail())
                ->first();

    if (!$user) {
        // Create new user if not exists
        $user = User::create([
            'name'       => $googleUser->getName(),
            'email'      => $googleUser->getEmail(),
            'google_id'  => $googleUser->getId(),
            'password'   => bcrypt(Str::random(16)), // random password
            'role_id'    => 3, // default role_id
        ]);
    }

    // Log in the user
    Auth::login($user);

    // Redirect based on role
    $role = $user->role; // use the relationship
    if ($role && $role->role_name === 'admin') {
        return redirect()->route('admin.dashboard');
    } else {
        return redirect()->route('home.public');
    }
}

}
