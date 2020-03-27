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
    return view('index');
});

Route::post('/proceed', 'PaymentController@payment');
Route::post('/payment_start', 'PaymentController@paymentStart');
Route::post('/again', 'PaymentController@again');
