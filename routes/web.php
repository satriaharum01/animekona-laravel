<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::POST('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::POST('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

Route::get('/account/login', [App\Http\Controllers\AuthController::class, 'index'])->name('account.login');
Route::get('/', [App\Http\Controllers\FrontController::class, 'index']);

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\AdminDashboardController::class, 'index'])->name('dashboard');
    Route::get('/anime', [App\Http\Controllers\AdminAnimeController::class, 'index'])->name('anime');
});
