<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::view('/contact', 'contact')->name('contact');




Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

Route::get('/table', function () {
    return view('admin.table');
})->name('table');

Route::get('/users', function () {
    return view('admin.users');
})->name('users');

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


// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });


require __DIR__.'/auth.php';
