<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Create a Customer</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style>
        .bk{
            height: 100px;
            background-color: #0056b3;
        }
        .bk h1{
            color: white;
        }
        .bk2 h5{
            color:gray;
        }
    </style>
</head>
<body>
<div class="container col-lg-12  bk">
    <h1 style="font-family: Georgia;">Add Investment</h1><br  />
</div>
<div class="container col-lg-12 bk2" style="font-family: Georgia">
    <br>
    <br>
    <h5>Add Investment here....</h5>
    <br>
</div>

<div class="container col-lg-10">
    <div class="container">
    </div>
    {{--<div class="container col-lg-10">--}}
        {{--<form action="/searchcustomer" method="POST" role="search">--}}
            {{--{{ csrf_field() }}--}}
            {{--<div class="input-group">--}}
                {{--<input type="text" class="form-control" name="q" placeholder="Search Customers Here..."> <span class="input-group-btn">--}}
                    {{--<button type="submit" class="btn btn-default">--}}
                        {{--<span class="glyphicon glyphicon-search"></span>--}}
                    {{--</button></span>--}}
                {{--</span>--}}
            {{--</div>--}}
        {{--</form>--}}
        {{--<br />--}}
        {{--<br />--}}
        {{--@if (\Session::has('success'))--}}
            {{--<div class="alert alert-success">--}}
                {{--<p>{{ \Session::get('success') }}</p>--}}
            {{--</div><br />--}}
        {{--@endif--}}
        {{--<table class="table table-striped">--}}
            {{--<thead>--}}
            {{--<tr>--}}
                {{--<th>Customer ID</th>--}}
                {{--<th>First Name</th>--}}
                {{--<th>Last Name</th>--}}
                {{--<th>Cell NO</th>--}}
                {{--<th>CNIC</th>--}}
                {{--<th>Address</th>--}}

                {{--<th colspan="2">Action</th>--}}
            {{--</tr>--}}
            {{--</thead>--}}
            {{--<tbody>--}}
            {{--@foreach($customer as $customers)--}}
                {{--<tr>--}}
                    {{--<td>{{$customers['id']}}</td>--}}
                    {{--<td>{{$customers['fname']}}</td>--}}
                    {{--<td>{{$customers['lname']}}</td>--}}
                    {{--<td>{{$customers['cell_no']}}</td>--}}
                    {{--<td>{{$customers['cnic']}}</td>--}}
                    {{--<td>{{$customers['address']}}</td>--}}
                    {{--<td><a href="{{action('BeaconicController@edit', $customers['id'])}}" class="btn btn-warning">Edit</a></td>--}}
                    {{--<td>--}}
                        {{--<form action="{{action('BeaconicController@destroy', $customers['id'])}}" method="post">--}}
                            {{--{{csrf_field()}}--}}
                            {{--<input name="_method" type="hidden" value="DELETE">--}}
                            {{--<button class="btn btn-danger" type="submit">Delete</button>--}}
                        {{--</form>--}}
                    {{--</td>--}}
                {{--</tr>--}}
            {{--@endforeach--}}
            {{--</tbody>--}}
        {{--</table>--}}
    {{--</div>--}}
{{--</div>--}}
<div class="container col-lg-12" style="padding-left: 200px">
    <form method="post" action="{{url('investment')}}">
        {{csrf_field()}}
        {{--<div class="row col-md-4">--}}
            {{--<label for="customer_id">Customer_id</label>--}}
            {{--<select id="customer_id" class="form-control">--}}
                {{--<option selected name="customer_id" for="customer_id">Choose...</option>--}}
                {{--@foreach($customer as $customers)--}}
                    {{--<option>{{$customers->id}}</option>--}}
                {{--@endforeach--}}
            {{--</select>--}}
        {{--</div>--}}
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="customer_id">customer_id:</label>
                <input type="text" class="form-control" name="customer_id">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="total_amount">total_amount:</label>
                <input type="text" class="form-control" name="total_amount">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="investType">InvestType:</label>
                <input type="text" class="form-control" name="InvestType">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <button type="submit" class="btn btn-success" style="margin-left:38px">Add Investment</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>