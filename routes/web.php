<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RobotController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// --- PUBLIC ROUTES ---
Route::get('/', function () { return view('home'); })->name('home.public');
Route::get('/about', function () { return view('about'); })->name('about');
Route::get('/services', function () { return view('services'); })->name('services');
Route::view('/contact', 'contact')->name('contact');
Auth::routes();


// --- AUTHENTICATED USER ROUTES ---
Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// --- ADMIN ROUTES ---
Route::middleware(['auth', 'role:admin,editor'])->prefix('admin')->name('admin.')->group(function () {

    // Dashboard
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    // Users
    Route::get('/users', function () {
        return view('admin.users.users');
    })->name('users.index');

    Route::get('/staff', function () {
        return view('admin.users.staff');
    })->name('staff.index');

    // Project Management
    Route::resource('robots', RobotController::class);


    Route::get('/maintenance', function () {
        return view('admin.project-management.maintenance-records');
    })->name('maintenance.index');

    // Projects and Tasks
    Route::get('/projects', function () {
        return view('admin.projects-and-tasks.projects');
    })->name('projects.index');

    // Operations
    Route::get('/road-segments', function () {
        return view('admin.operations.road-segments');
    })->name('road-segments.index');

    Route::get('/street-defects', function () {
        return view('admin.operations.street-defects');
    })->name('street-defects.index');

    // Contact
    Route::get('/messages', function () {
        return view('admin.contact-messages');
    })->name('messages.index');

    //profile
      Route::get('/user-profile', function () {
        return view('admin.profile');
    })->name('profile.index');


    // Route::get('/messages/{id}', function ($id) {
    //     return view('admin.contact-messages', ['message_id' => $id]);
    // })->name('messages.show');
});

