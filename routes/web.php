<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductFilterController;
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

// Route::resource('/product', 'App\Http\Controllers\ProductController');
Route::resource('/product', ProductController::class);
Route::get('/prod/{id}', [ProductFilterController::class, 'show'])->name('filter');
Route::get('/solde', [ProductFilterController::class, 'solde'])->name('solde');

Route::resource('/categories', CategoryController::class);





Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'create'])->name('auth.login');
    Route::post('/login', [AuthController::class, 'login']);
});


Route::middleware(['auth'])->group(function () {
    Route::delete('/logout', [AuthController::class, 'logout'])->name('auth.logout');
});
