<?php

use Illuminate\Support\Facades\Route;
use Modules\AuthModule\App\Http\Controllers\LoginController;
use Modules\AuthModule\App\Http\Controllers\RegisterController;
use Modules\AuthModule\App\Http\Controllers\AuthModuleController;

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

// Route::group([], function () {
//     Route::resource('authmodule', AuthModuleController::class)->names('authmodule');
// });
Route::prefix('register')->group(function () {
    Route::get('/', [RegisterController::class, 'create'])->name('Register.crate');
    Route::post('/', [RegisterController::class, 'store'])->name('Register.store');
});
Route::prefix('login')->group(function () {
    Route::get('/', [LoginController::class, 'create'])->name('login.crate');
    Route::post('/', [LoginController::class, 'store'])->name('login.store');
});