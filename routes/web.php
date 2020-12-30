<?php
use Illuminate\Support\Facades\Route;
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', 'UserInfoController@index');
Route::get('/delete/{id}', ['as' => 'delete.user', 'uses' => 'UserInfoController@destroy']);
Route::post('/store', ['as' => 'store.user', 'uses' => 'UserInfoController@store']);
Route::get('/update/{id}', ['as' => 'update.user.form', 'uses' => 'UserInfoController@updateForm']);
Route::post('/update', ['as' => 'update.user', 'uses' => 'UserInfoController@update']);
Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.', 'middleware' => 'auth'], function (){
    Route::get('/', ['as' => 'index', 'uses' => 'DashboardController@index']);
});
