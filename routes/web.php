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

Auth::routes();

Route::get('/shipper-log', 'Auth\LoginController@showShipperLoginForm');
Route::get('/carrier-log', 'Auth\LoginController@showCarrierLoginForm');

Route::get('/shipper-reg', 'Auth\RegisterController@showShipperRegistrationForm');

Route::get('phone/verify', 'Auth\PhoneVerificationController@show')->name('phone-verification.notice');
Route::post('phone/verify', 'Auth\PhoneVerificationController@verify')->name('phone-verification.verify');
Route::get('/home', 'HomeController@index')->name('home');
