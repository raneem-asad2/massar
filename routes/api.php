<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RobotDataController;



Route::get('/robots', [RobotDataController::class, 'index']);
Route::get('/robots/{id}', [RobotDataController::class, 'show']);

Route::post('/robots', [RobotDataController::class, 'store']);//for testing
