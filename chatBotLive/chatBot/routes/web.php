<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//sample to send data to a webhook
Route::post('/chatbot/postfields','Sheet1Controller@index');
//save to database chatbot
//Route::post('/chatbot/createfields','Sheet1Controller@store');
//save to databasesignin
Route::post('/chatbot/createfields','Sheet1Controller@store');
//get from webhook
Route::post('/chatbot/fields','Sheet1Controller@create');
//dd webhook data
Route::get('/chatbot/chat/{getChat}','Sheet1Controller@chat');
//test add row to secind database table
Route::post('/timeline/postfields','Sheet1Controller@storeTimeline');
//update sign out details to matching rows
Route::post('/timeline/editSignin','Sheet1Controller@editSignin');
//testing a new controller
Route::get('/health/test','HealthController@test');
//test add row to secind database table
Route::post('/health/postfields','HealthController@storeTimeline');
//test time script
Route::get('/time','timeController@index');