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
Route::get('eloquent', function() {

    return View::make('eloquent')

        // all the bears (will also return the fish, trees, and picnics that belong to them)
        ->with('customer',\App\Customer::all());

});