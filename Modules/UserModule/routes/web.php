<?php

use Illuminate\Support\Facades\Route;

use Modules\UserModule\App\Http\Controllers\InvoicesController;
use Modules\UserModule\App\Http\Controllers\UserModuleController;
use Modules\UserModule\App\Http\Controllers\FreightTransportationServicesController;
use Modules\UserModule\App\Http\Controllers\PassengerTransportationServiceController;

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


Route::resource('/', UserModuleController::class)->names('usermodule.index');


Route::prefix('Dich-vu-van-tai-hanh-khach')->group(function () {
    Route::get('/', [PassengerTransportationServiceController::class, 'index']);
    Route::get('/', [PassengerTransportationServiceController::class, 'SearchItinerary'])->name('SearchItinerary');
    Route::post('/{id}', [PassengerTransportationServiceController::class, 'BookTicket'])->name('BookTicket.store');
    Route::get('/{id}', [PassengerTransportationServiceController::class, 'ShowTicketBooked'])->name('ShowTicketBooked');
});
Route::group([], function () {
    Route::resource('/Dich-vu-van-tai-hang-hoa', FreightTransportationServicesController::class)->names('FreightTransportationServices.index');
});
Route::prefix('/hoa-don')->group(function () {
    Route::get('/', [InvoicesController::class, 'store'])->name('invoices.store');
    Route::get('/{id}', [InvoicesController::class, 'destroy'])->name('invoices.destroy');
});
