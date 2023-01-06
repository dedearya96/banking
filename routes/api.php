<?php

use App\Http\Controllers\CustomerServicesController;
use App\Http\Controllers\JwtController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\NasabahController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('auth/login', [JwtController::class, 'loginJwt']);
Route::group(['middleware' => 'jwt.verify'], function () {
    Route::get('auth/logout', [LogoutController::class, 'logout']);
    Route::get('auth/currentUser', [JwtController::class, 'getCurrentUsers']);

    Route::group(['midlleware' => 'customer_services'], function () {
        Route::post('customer-services/transfer', [CustomerServicesController::class, 'transferFromCustomer']);
        Route::get('customer-services/transaction', [CustomerServicesController::class, 'getTransactionCustomer']);
        Route::get('customer-services/all-transaction', [CustomerServicesController::class, 'getAllTransaction']);
        Route::get('customer-services/all-nasabah', [CustomerServicesController::class, 'getAllNasabah']);
    });

    Route::group(['midlleware' => 'nasabah'], function () {
        Route::post('nasabah/transfer', [NasabahController::class, 'transferFromNasabah']);
        Route::get('nasabah/transaction', [NasabahController::class, 'getTransactionNasabah']);
    });
});
