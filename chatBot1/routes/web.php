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
Route::post('/chatbot/fields','Sheet1Controller@create');
//dd results from webhook
Route::get('/chatbot/chat/{getChat}','Sheet1Controller@chat');
//test add row to second database table for sign in
Route::post('/timeline/postfields','Sheet1Controller@storeTimeline');
//update sign out details to matching rows
Route::post('/timeline/editSignin','Sheet1Controller@editSignin');