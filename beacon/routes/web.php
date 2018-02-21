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
Route::resource('eloquent','BeaconsController');
Route::resource('eloquent','BeaconicController');
Route::resource('investment','investmentController');

//Route::get('gettwo',function(){
//
////    $one=App\Investment::customer()->where('total_amount','=',5000)->get();
////    $one = App\Customer::find(7)->investment()->get();
////    $two = App\Customer::has('investment')
////        ->whereExists(function ($query) {
////            $query->select(DB::raw(1))
////                ->from('customers')
////                ->whereRaw('customers.name = name');
////        })
////
////        ->get();
////    return view('new',compact('two',$two));
//
//});
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
        $comics = App\Investment::where ( 'total_amount', 'LIKE', '%' . $q . '%' )->get();
//        $pagination = $comics->appends ( array (
//            'q' => Input::get ( 'q' )
//        ) );
        if (count ( $comics ) > 0)
            return view ( 'one', compact('comics',$comics));

    }
//    return view ( 'investment.index',compact('comics',$comics));
} );






Route::any( '/searchcustomer', function () {
    $q = Input::get ( 'q' );
    if($q != ""){
        $comics = App\Customer::where ( 'cell_no', 'LIKE', '%' . $q . '%' )->get();
//        $pagination = $comics->appends ( array (
//            'q' => Input::get ( 'q' )
//        ) );
        if (count ( $comics ) > 0)
            return view ( 'two', compact('comics',$comics));

    }
//    return view ( 'investment.index',compact('comics',$comics));
} );
/* Route for get all records with paginate 6 records*/
//Route::get ( '/records', function () {
//    $dummyDetails = Customer::paginate(6);
//    return view ( 'investment.index' )->withComics($dummyDetails);
//} );
