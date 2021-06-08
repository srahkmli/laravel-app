<?php

use Illuminate\Http\Request;
use App\Http\Controllers\customersController;
use App\Http\Controllers\cAddresController;
use App\Http\Controllers\ordersController;
use App\Http\Controllers\ownerController;
use App\Http\Controllers\productControler;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('customers', customersController::class);


Route::resource('customerAddress', cAddresController::class);

Route::resource('orders', ordersController::class);

Route::resource('product', productControler::class);

Route::resource('owner', ownerController::class);
