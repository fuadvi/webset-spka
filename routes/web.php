<?php

use App\Http\Controllers\DasboardController;
use App\Http\Controllers\DataEmailController;
use App\Http\Controllers\SkpaController;
use App\Http\Controllers\UserController;
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



Route::prefix('/')
    ->middleware(['auth'])
    ->group(function () {
        Route::get('/', [DasboardController::class, 'index'])->name('/');
        Route::get('/getDinas', [DataEmailController::class, 'getKd_dinas'])->name('kode');
        Route::resource('/spka', SkpaController::class);
        Route::resource('/data-email', DataEmailController::class);

        // user
        Route::get('/user', [UserController::class, 'index'])->name('/user');
    });


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
