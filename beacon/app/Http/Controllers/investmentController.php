<?php

namespace App\Http\Controllers;

use App\Investment;
use App\Customer;
use Illuminate\Http\Request;

class investmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $investment = Investment::all()->toArray();
        $val = \Session::get('ids');
        return view('investment.index', compact('investment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//    {$customer = Customer::all();
        return view('investment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'customer_id' => 'required',
            'total_amount' => 'required',

        ]);
$investment = $request->except(['_token']);
//        $savesum = Investment::create($investment);
            \DB::table('investment')->insert($investment);

//        return view('investment.index',compact('investment'));
        return view('welcome');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $investment = Investment::find($id);
        return view('eloquent.edit',compact('investment','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

//        $investment = $this->validate(request(), [
//            'customer_id' => 'required',
//            'total_amount' => 'required',
//            'investType' => 'required'
//        ]);
//        Investment::create($investment);
//        return view('investment.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $investment = Investment::find($id);
        $investment->delete();
        return redirect('eloquent')->with('success','Investment has been  deleted');
    }
}
