<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class PasswordController extends Controller
{
    /**
     * Update the user's password.
     */
    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validateWithBag('updatePassword', [
            'current_password' => ['required', 'current_password'],
            'password' => ['required', Password::defaults(), 'confirmed'],
        ]);

        $request->user()->update([
            'password' => Hash::make($validated['password']),
        ]);

        return back()->with('status', 'password-updated');
    }

    public function showForm()
    {
        return view('auth.set-password');
    }

    // Handle the form submission
    public function set(Request $request)
{
    $request->validate([
        'password' => 'required|string|min:8|confirmed',
    ]);

    $userId = session('google_user_id');
    if (!$userId) {
        return redirect()->route('login')->withErrors('Session expired, please login again.');
    }

    $user = User::find($userId);
    $user->password = bcrypt($request->password);
    $user->save();

    // Log in the user
    Auth::login($user);
    session()->forget('google_user_id');

    // Redirect based on role
    if ($user->role && $user->role->role_name === 'admin') {
        return redirect()->route('admin.dashboard');
    }

    return redirect()->route('home.public');
}

}
