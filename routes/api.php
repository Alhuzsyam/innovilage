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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// get all data
Route::get('saklar/saklar1','ApiController@get_data_saklar');
Route::get('datasensor4','ApiController@get_all_sensor4');
Route::get('datasensor3','ApiController@get_all_sensor3');
Route::get('datasensor2','ApiController@get_all_sensor2');
Route::get('datasensor1','ApiController@get_all_sensor1');

// get by id
Route::get('datasensor1/id/{id}','ApiController@get_sensor1');
Route::get('datasensor2/id/{id}','ApiController@get_sensor2');
Route::get('datasensor3/id/{id}','ApiController@get_sensor3');
Route::get('datasensor4/id/{id}','ApiController@get_sensor4');

Route::post('sensor/datasensor1','ApiController@insert_sensor1');
Route::post('sensor/datasensor2','ApiController@insert_sensor2');
Route::post('sensor/datasensor3','ApiController@insert_sensor3');
Route::post('sensor/datasensor4','ApiController@insert_sensor4');
Route::post('saklar/saklar1','ApiController@insert_saklar');
Route::put('saklar/saklar1/update/{id}','ApiController@update_saklar');
Route::delete('saklar/saklar1/delete/{id}','ApiController@delete_saklar');
