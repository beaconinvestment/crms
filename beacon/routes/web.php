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
//Route::resource('eloquent','BeaconicController');
//Route::resource('investment','investmentController');

Route::get('gettwo',function(){

//    $one=App\Investment::customer()->where('total_amount','=',5000)->get();
//    $one = App\Customer::find(7)->investment()->get();
    $two = App\Customer::has('investment')->get();
    return view('new',compact('two',$two));

});
//Route::get('gettwo',function(){
//
////    $one=App\Investment::customer()->where('total_amount','=',5000)->get();
//    $one = App\Investment::has('customer_id','>',8)->get();
//    return view('new')->with('one',$one);
//
//});
//Route::get('/get','CheckController@like');
use App\Customer;
use Illuminate\Support\Facades\Input;

Route::any( '/search', function () {
    $q = Input::get ( 'q' );
    if($q != ""){
        $comics = App\Customer::where ( 'name', 'LIKE', '%' . $q . '%' )->orWhere ( 'comic_writer', 'LIKE', '%' . $q . '%' )->paginate (5)->setPath ( '' );
        $pagination = $comics->appends ( array (
            'q' => Input::get ( 'q' )
        ) );
        if (count ( $comics ) > 0)
            return view ( 'welcome' )->withDetails( $comics )->withQuery ( $q );

    }
    return view ( 'welcome' )->withMessage ( 'No Details found. Try to search again !' );
} );

/* Route for get all records with paginate 6 records*/
Route::get ( '/records', function () {
    $dummyDetails = Comic::paginate(6);
    return view ( 'welcome' )->withComics($dummyDetails);
} );
