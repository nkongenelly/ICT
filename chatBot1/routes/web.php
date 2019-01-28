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
//save to database
Route::post('/chatbot/createfields','Sheet1Controller@store');
//get from webhook
Route::get('/chatbot/createfields','Sheet1Controller@crete');