<?php

use App\Http\Controllers\SubmissionController;
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

Route::get('/', [Controller::class, 'login']);
Route::get('/registration', [Controller::class, 'registration']);

Route::resource('/submissions', SubmissionController::class);
Route::get('/track', [SubmissionController::class, 'track']);

Route::get('/prodi/user', [ProdiController::class, 'user']);