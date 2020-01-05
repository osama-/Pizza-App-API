<?php

use Illuminate\Http\Request;

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
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/
//Route::get('productt', 'OrderItemController@index');
Route::apiResource('category','ProductCategoryController');
Route::apiResource('size','SizeController');
Route::apiResource('product','ProductController');
Route::group(['middleware' => 'auth:api'], function(){Route::apiResource('order','OrderController');});
Route::post('/order/create','OrderController@createOrder');
Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');
Route::group(['middleware' => 'auth:api'], function(){Route::post('logout','UserController@logout');});
Route::group(['middleware' => 'auth:api'], function(){Route::get('/order/show/{id}', 'OrderController@show');});
Route::get('delivery-charge', 'DeliveyChargeController@index');

