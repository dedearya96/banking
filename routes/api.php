<?php

use App\Http\Controllers\JwtController;
use App\Http\Controllers\LogoutController;
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
        Route::post('customer-services/transfer', []);
        Route::get('customer-services/transaction', []);
        Route::get('customer-services/all-transaction', []);
        Route::get('customer-services/all-nasabah', []);
    });

    Route::group(['midlleware' => 'nasabah'], function () {
        Route::post('nasabah/transfer', []);
        Route::post('nasabah/transactions', []);
    });
});
