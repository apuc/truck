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
})->name('start');

Auth::routes();

Route::get('/shipper-log', 'Auth\LoginController@showShipperLoginForm')->name('shipper-log');
Route::get('/carrier-log', 'Auth\LoginController@showCarrierLoginForm')->name('carrier-log');

Route::get('/shipper-reg', 'Auth\RegisterController@showShipperRegistrationForm')->name('shipper-reg');
Route::get('/carrier-reg', 'Auth\RegisterController@showCarrierRegistrationForm')->name('carrier-reg');

Route::get('phone/verify', 'Auth\PhoneVerificationController@show')->name('phone-verification.notice');
Route::post('phone/verify', 'Auth\PhoneVerificationController@verify')->name('phone-verification.verify');

Route::get('/home', 'HomeController@index')->name('home');


Route::middleware(['auth', 'verified-phone'])->group(function () {

    Route::middleware('shipper')->group(function(){
        Route::get('/shipper-dash', 'ShipperController@showDashboard')->name('shipper-dash');
    });

    Route::middleware('carrier')->group(function(){
        Route::get('/carrier-dash', 'CarrierController@showDashboard')->name('carrier-dash');
    });



});


