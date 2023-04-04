<?php

use App\Http\Controllers\ApplicantsController;
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

Route::get('/', [ApplicantsController::class, 'index'])->name('applicants.index');

Route::get('/applicants/create', [ApplicantsController::class, 'create'])->name('applicants.create');

Route::post('/applicants/store', [ApplicantsController::class, 'store'])->name('applicants.store');
