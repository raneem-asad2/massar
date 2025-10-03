<?php

use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RobotController;
use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaintenanceRecordController;
use App\Http\Controllers\RoadSegmentController;
use App\Http\Controllers\StreetDefectController;
use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\RobotDataController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// --- PUBLIC ROUTES ---
Route::get('/', function () { return view('home'); })->name('home.public');
Route::get('/about', function () { return view('about'); })->name('about');
Route::get('/services', function () { return view('services'); })->name('services');
Route::resource('contact-messages', ContactMessageController::class);

Route::view('/contact', 'contact')->name('contact');
Auth::routes();


// --- ADMIN ROUTES ---
Route::middleware(['auth', 'role:admin,editor'])->prefix('admin')->name('admin.')->group(function () {

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('users', UserController::class);
    Route::resource('staff', StaffController::class);
    Route::resource('robots', RobotController::class);
    Route::resource('projects', ProjectController::class);
    Route::resource('maintenance-records', MaintenanceRecordController::class);
    Route::resource('road-segments', RoadSegmentController::class);
    Route::resource('street-defects', StreetDefectController::class);

    // Profile routes
    Route::get('/user-profile', [ProfileController::class, 'show'])->name('profile.show'); // view
    Route::get('/user-profile/edit', [ProfileController::class, 'edit'])->name('profile.edit'); // edit form
    Route::patch('/user-profile', [ProfileController::class, 'update'])->name('profile.update'); // update
    Route::delete('/user-profile', [ProfileController::class, 'destroy'])->name('profile.destroy'); // delete account
});

Route::get('auth/google', [SocialiteController::class, 'googleLogin'])->name('google.login');
Route::get('auth/google/callback', [SocialiteController::class, 'handleGoogleCallback'])->name('google.callback');

// routes/web.php
    Route::get('/set-password', [PasswordController::class, 'showForm'])->name('password.form');
    Route::post('/set-password', [PasswordController::class, 'set'])->name('password.set');



