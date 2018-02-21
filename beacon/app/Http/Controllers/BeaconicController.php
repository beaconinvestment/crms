<?php

namespace App\Http\Controllers;
use App\Customer;
use App\Investment;
use App\Investmenttype;
use Illuminate\Http\Request;

class BeaconicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = Customer::all()->toArray();
        return view('eloquent.index', compact('customer'));
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
        $customer = $this->validate(request(), [
            'name' => 'required',
            'cell_no' => 'required',


        ]);


        Customer::create($customer);
        $customer = $this->validate(request(), [
            'name' => 'required',
            'cell_no' => 'required',


        ]);


        return back()->with('success', 'Customer has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('eloquent.edit',compact('customer','id'));
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
        $customer = Customer::find($id);
        $this->validate(request(), [
            'name' => 'required',
            'cell_no' => 'required|numeric'
        ]);
        $customer->name = $request->get('name');
        $customer->cell_no = $request->get('cell_no');
        $customer->save();
        return redirect('eloquent')->with('success',' Customer has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return redirect('customer')->with('success','Customer has been  deleted');
    }
}
