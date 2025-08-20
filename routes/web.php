<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home.public');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::view('/contact', 'contact')->name('contact');


// AUTHENTICATION ROUTES

Auth::routes();


// AUTHENTICATED USER ROUTES
Route::middleware('auth')->group(function () {
    // The default dashboard for logged-in users
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // User Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// ADMIN ROUTES

Route::middleware(['auth', 'role:admin,editor'])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('/table', function () {
        return view('admin.table');
    })->name('table');

    Route::get('/users', function () {
        return view('admin.users');
    })->name('users');

    // Admin Mailbox Routes
    Route::prefix('mailbox')->group(function () {
        Route::get('/inbox', function () {
            return view('admin.mailbox.inbox');
        })->name('mailbox.inbox');

        Route::get('/compose', function () {
            return view('admin.mailbox.compose');
        })->name('mailbox.compose');

        Route::get('/read', function () {
            return view('admin.mailbox.read');
        })->name('mailbox.read');
    });
});