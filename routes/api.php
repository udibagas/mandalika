<?php

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

Route::post('login', 'AuthController@login');

Route::group(['middleware' => 'auth:api'], function () {
    Route::post('artisan', 'AdminController@artisan');
});

Route::match(['get', 'post'], 'sensorLog', 'SensorLogController@store');
Route::get("sensorLog", "SensorLogController@index");
Route::get("sensorLog/getLastData", "SensorLogController@getLastData");
Route::get("sensorLog/getTekanan", "SensorLogController@getTekanan");
Route::get("sensorLog/getLogAngin", "SensorLogController@getLogAngin");
Route::get('getTerbitTerbenam', 'SensorLogController@getTerbitTerbenam');
Route::get('getLastUpdate', 'SensorLogController@getLastUpdate');
