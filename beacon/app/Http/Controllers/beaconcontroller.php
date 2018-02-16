<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Investment;
use App\Investmenttype;
use View;

class beaconcontroller extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    protected function Show_All()
    {
        return View::make('eloquent')
        ->with('customer',\App\Customer::all())
        ->with('investment',\App\Investment::all());
//        ->with('investment_type',\App\Investmenttype::all());

    }
}
