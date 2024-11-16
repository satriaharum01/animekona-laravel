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
    Route::get('/anime/show/{id}', [App\Http\Controllers\AdminAnimeController::class, 'show'])->name('anime.show');
    Route::get('/anime/new', [App\Http\Controllers\AdminAnimeController::class, 'new'])->name('anime.new');
    Route::get('/anime/show/{id}/json', [App\Http\Controllers\AdminAnimeController::class, 'json']);
    Route::get('/episode', [App\Http\Controllers\AdminEpisodeController::class, 'index'])->name('episode');
    Route::get('/episode/new', [App\Http\Controllers\AdminEpisodeController::class, 'new'])->name('episode.new');
    Route::get('/episode/json', [App\Http\Controllers\AdminEpisodeController::class, 'json']);
});
