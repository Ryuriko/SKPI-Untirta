<?php

use App\Http\Controllers\SubmissionController;
use App\Http\Controllers\DekanatController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\Controller;
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

// Landing Page
Route::get('/', [Controller::class, 'index']);

// User Registration
Route::get('/login', [Controller::class, 'login']);
Route::get('/registration', [Controller::class, 'registration']);

// Mahasiswa
Route::resource('/submissions', SubmissionController::class);
Route::get('/track', [SubmissionController::class, 'track']);

// Prodi
Route::get('/prodi/user', [ProdiController::class, 'user']);
Route::get('/prodi/skpi', [ProdiController::class, 'skpi']);

// Dekanat
Route::get('/dekanat/skpi', [DekanatController::class, 'skpi']);