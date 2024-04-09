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

Route::group([], function () {
    Route::resource('/', UserModuleController::class)->names('usermodule.index');
   
});

Route::group([], function () {
    Route::resource('/Dich-vu-van-tai-hanh-khach', PassengerTransportationServiceController::class)->names('PassengerTransportationService.index');

});

Route::group([], function () {
    Route::resource('/Dich-vu-van-tai-hang-hoa', FreightTransportationServicesController::class)->names('FreightTransportationServices.index');

});
Route::group([], function () {
    Route::resource('/hoa-don', InvoicesController::class)->names('Bill.index');

});