<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\AuthModule\App\Http\Controllers\LoginController;

/*
    |--------------------------------------------------------------------------
    | API Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register API routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | is assigned the "api" middleware group. Enjoy building your API!
    |
*/

Route::middleware(['auth:sanctum'])->prefix('v1')->name('api.')->group(function () {
    Route::get('authmodule', fn (Request $request) => $request->user())->name('authmodule');
});
// route::post('login', [LoginController::class, 'store'])->name('login.strore');