<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RobotDataController;



Route::get('/robot-data/{filename}', [RobotDataController::class, 'importFromS3']);

Route::get('/import-local-json', [RobotDataController::class, 'importLocalJson']);

Route::post('/import-robots', [RobotDataController::class, 'importFromApi']);




