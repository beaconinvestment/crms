<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
//use Customer\Investment;
class CheckController extends Controller
{
    //
    /**
     * @return $this
     */
    public function like( )
    {
        $one = App\Investment::customer()->where('name')->get();

        return view('new')->with('one',$one);
}
}