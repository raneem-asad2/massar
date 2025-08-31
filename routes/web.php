<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RobotController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaintenanceRecordController;
use App\Http\Controllers\RoadSegmentController;
use App\Http\Controllers\StreetDefectController;
use App\Http\Controllers\ContactMessageController;
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


// --- ADMIN ROUTES ---
Route::middleware(['auth', 'role:admin,editor'])->prefix('admin')->name('admin.')->group(function () {

    // Dashboard
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    // Users
    Route::resource('users', UserController::class);

    // Staff
    Route::get('/staff', function () {
        return view('admin.users.staff');
    })->name('staff.index');

    // Robots
    Route::resource('robots', RobotController::class);

    // Maintenance
    Route::get('/maintenance', function () {
        return view('admin.project-management.maintenance-records');
    })->name('maintenance.index');

    // Projects
    Route::resource('projects', ProjectController::class);

    // Operations
    Route::get('/road-segments', function () {
        return view('admin.project-management.road-segments');
    })->name('road-segments.index');

    Route::get('/street-defects', function () {
        return view('admin.project-management.street-defects');
    })->name('street-defects.index');

    // Contact messages
    Route::get('/messages', function () {
        return view('admin.contact-messages');
    })->name('messages.index');

    // Profile routes
    Route::get('/user-profile', [ProfileController::class, 'show'])->name('profile.show'); // view
    Route::get('/user-profile/edit', [ProfileController::class, 'edit'])->name('profile.edit'); // edit form
    Route::patch('/user-profile', [ProfileController::class, 'update'])->name('profile.update'); // update
    Route::delete('/user-profile', [ProfileController::class, 'destroy'])->name('profile.destroy'); // delete account
});

Route::resource('maintenance-records', MaintenanceRecordController::class);
Route::resource('road-segments', RoadSegmentController::class);
Route::resource('street-defects', StreetDefectController::class);
Route::resource('contact-messages', ContactMessageController::class);
  
