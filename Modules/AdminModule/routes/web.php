<?php

use Illuminate\Support\Facades\Route;
use Modules\AdminModule\App\Http\Controllers\AdminModuleController;
use Modules\AdminModule\App\Http\Controllers\AdminCoachManagerController;
use Modules\AdminModule\App\Http\Controllers\AdminTicketManagerController;

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

Route::prefix('/admin')->group(function () {

    Route::get('', [AdminTicketManagerController::class, 'index']);
});

Route::prefix('/admin/quan-ly-xe')->group(function () {
    Route::get('/', [AdminCoachManagerController::class, 'index'])->name('AdminCoachManager.index');
    Route::post('/', [AdminCoachManagerController::class, 'store'])->name('AdminCoachManager.strore');
    Route::get('/{id}', [AdminCoachManagerController::class, 'destroy'])->name('AdminCoachManager.destroy');
    Route::put('/{id}', [AdminCoachManagerController::class, 'edit'])->name('AdminCoachManager.edit');
});