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

Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function () {
    Route::get('/', [CarController::class, 'index'])->name('car.dashboard');
    Route::get('/reservation/{id}/{trigger}', [CarController::class, 'reservation'])->name('car.reservation');
    Route::delete('/reject/{id}', [CarController::class, 'reject'])->name('car.reject');
    Route::resource('car', CarController::class);
});

Route::get('/', [UserController::class, 'index'])->name('home');
Route::get('/cars', [UserController::class, 'cars'])->name('cars');
Route::get('/cars/{id}', [UserController::class, 'car'])->name('car');
Route::post('/reserve/{id}', [UserController::class, 'reserve'])->middleware('role:user')->name('reserve');
Route::get('/contact', [UserController::class, 'contact'])->name('contact');
Route::get('/success', [UserController::class, 'success'])->name('success');
Route::get('/transaction', [UserController::class, 'transaction'])->name('transaction');

Auth::routes();
