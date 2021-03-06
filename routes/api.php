<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['prefix' => 'auth' , 'namespace' => 'Api\V1\Auth'] , function (){
    Route::post('login' , 'AuthController@login');
    Route::post('register' , 'AuthController@register');
    Route::post('logout' , 'AuthController@logout');
    Route::post('me' , 'AuthController@me');
});


Route::group(['prefix' => 'user' , 'namespace' => 'Api\V1\Users', 'middleware' => 'auth:api'], function (){
    Route::get('getAllUsers', ['uses' => 'UserController@getAllUsers']);
    Route::post('store-user', ['uses' => 'UserController@store']);
});
