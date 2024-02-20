<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [CarController::class, 'index'])->name('car.dashboard');
    Route::resource('car', CarController::class);
});

Route::get('/', [UserController::class, 'index'])->name('home');
Route::get('/cars', [UserController::class, 'cars'])->name('cars');
Route::get('/car', [UserController::class, 'car'])->name('car');
Route::get('/contact', [UserController::class, 'contact'])->name('contact');
Route::get('/success', [UserController::class, 'success'])->name('success');
Route::get('/transaction', [UserController::class, 'transaction'])->name('transaction');

Auth::routes();
