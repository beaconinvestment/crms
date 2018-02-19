<?php

namespace App\Http\Controllers;

use App\Investment;
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
        return view('investment.index', compact('investment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('eloquent.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $investment = $this->validate(request(), [
            'total_amount' => 'required',
            'customer_id' => 'required',
            'investType' => 'required'
        ]);

        Investment::create($investment);

        return back()->with('success', 'Investment has been added');
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
    public function update(Request $request, $id)
    {
        $investment = Investment::find($id);
        $this->validate(request(), [
            'total_amount' => 'required',
            'customer_id' => 'required',
            'investType' => 'required'
        ]);
        $investment->total_amount = $request->get('total_amount');
        $investment->customer_id = $request->get('customer_id');
        $investment->save();
        return redirect('eloquent')->with('success',' Investment has been updated');
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
