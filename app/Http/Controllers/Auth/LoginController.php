<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    /**
     * Get the post-login redirect path based on user role.
     *
     * @return string
     */
    protected function redirectTo()
    {
        $role = Auth::user()->role->role_name;

        if ($role === 'admin') {
            return '/admin/dashboard';
        } elseif ($role === 'editor') {
            return '/admin/dashboard';
        } else {
            return '/home';
        }
    }
}
