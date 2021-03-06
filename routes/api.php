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

Route::get('restaurants','RestaurantController@getRestaurants');
Route::post('user/register','UserController@register');
Route::post('user/auth','UserController@auth');
Route::post('restaurant/menu','RestaurantController@getMenu');