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
    return view('dashboard');
});

Route::get('/table', function () {
    return view('dashboard.table');
});
Route::get('/admin/users', function () {
    return view('dashboard.users');
});


Route::prefix('mailbox')->group(function () {
    Route::get('/inbox', function () {
        return view('dashboard.mailbox.mailbox');
    });
    Route::get('/inbox', function () {
        return view('dashboard.mailbox.inbox');
    });
    Route::get('/compose', function () {
        return view('dashboard.mailbox.compose');
    });

    Route::get('/read', function () {
        return view('dashboard.mailbox.read');
    });
});

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });


require __DIR__.'/auth.php';
