<?php

use Illuminate\Http\Request;
use App\Http\Controllers\customersController;
use App\Http\Controllers\cAddresController;
use App\Http\Controllers\api\v1\loginController;
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
Route::put('customersUpdate/{id}', 'App\Http\Controllers\customersController@update');
Route::get('customer/{id}', 'App\Http\Controllers\customersController@show');
Route::delete('customersDelete/{id}', 'App\Http\Controllers\customersController@destroy');


Route::resource('customerAddress', cAddresController::class);

Route::resource('orders', ordersController::class);
//Route::resource('orders/{id1}/{id2}', ordersController::class);
Route::get('orders/{id}', 'App\Http\Controllers\ordersController@show');


Route::resource('product', productControler::class);

Route::resource('owner', ownerController::class);

Route::prefix('/user')->group(function () {
    Route::post('/login', 'App\Http\Controllers\api\v1\loginController@login');
    Route::post('/register', 'App\Http\Controllers\api\v1\loginController@register');
    Route::middleware('auth:api')->get('/all', 'App\Http\Controllers\api\v1\userController@index');
});
