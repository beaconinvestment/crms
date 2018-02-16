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
//Route::get('eloquent', function() {
//
//    return View::make('eloquent')
//
//
//        ->with('customer',\App\Customer::all());
//
//
//});
//Route::get('eloquent','beaconcontroller@Show_All');
//Route::resource('eloquent','BeaconsController');
Route::resource('eloquent','BeaconicController');