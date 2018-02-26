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
{{--<div class="container col-lg-12" style="padding-left: 200px">--}}
    {{--<form method="post" action="{{url('eloquent')}}">--}}
        {{--{{csrf_token()}}--}}
        {{--<form>--}}
            {{--<div class="form-row col-lg-5">--}}
                {{--<div class="col-lg-12">--}}
                    {{--<input type="text" class="form-control" placeholder="Investment">--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</form>--}}
        {{--<br>--}}
        {{--<div>--}}
            {{--<div class="btn-group btn-group-justified">--}}
                {{--<a href="/eloquent" class="btn btn-primary pull-right">Back</a></h3>--}}
                {{--<a href="/inv" class="btn btn-primary pull-right">Next</a></h3>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</form>--}}
{{--</div>--}}


<div class="container col-lg-12" style="padding-left: 200px">
    <form method="post" action="{{url('investment')}}">
        {{csrf_field()}}
        {{--<div class="row">--}}
            {{--<div class="col-md-4"></div>--}}
            {{--<div class="form-group col-md-4">--}}
                {{--<label for="id">Customer ID:</label>--}}
                {{--<input type="text" class="form-control" name="id">--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-4"></div>--}}
            {{--<div class="form-group col-md-4">--}}
                {{--<label for="fname">First Name:</label>--}}
                {{--<input type="text" class="form-control" name="fname">--}}
            {{--</div>--}}
        {{--</div>--}}
{{--</div>--}}
{{--<div></div>--}}
{{--<div class="row">--}}
    {{--<div class="col-md-4"></div>--}}
    {{--<div class="form-group col-md-4">--}}
        {{--<label for="lname">Last Name:</label>--}}
        {{--<input type="text" class="form-control" name="lname">--}}
    {{--</div>--}}
{{--</div>--}}
{{--<div class="row">--}}
    {{--<div class="col-md-4"></div>--}}
    {{--<div class="form-group col-md-4">--}}
        {{--<label for="cell_no">Cell_no:</label>--}}
        {{--<input type="text" class="form-control" name="cell_no">--}}
    {{--</div>--}}
{{--</div>--}}
{{--<div class="row">--}}
    {{--<div class="col-md-4"></div>--}}
    {{--<div class="form-group col-md-4">--}}
        {{--<label for="cnic">CNIC:</label>--}}
        {{--<input type="text" class="form-control" name="cnic">--}}
    {{--</div>--}}
{{--</div>--}}
{{--<div class="row">--}}
    {{--<div class="col-md-4"></div>--}}
    {{--<div class="form-group col-md-4">--}}
        {{--<label for="address">Address:</label>--}}
        {{--<input type="text" class="form-control" name="address">--}}
    {{--</div>--}}
{{--</div>--}}

        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="customer_id">Customer_id:</label>

            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="investType">Investment Type:</label>
                <input type="text" class="form-control" name="investType">
            </div>
        </div>
<div class="row">
    <div class="col-md-4"></div>
    <div class="form-group col-md-4">
        <label for="total_amount">total_amount:</label>
        <input type="text" class="form-control" name="total_amount">
    </div>
</div>

</div>
<div class="row">
    <div class="col-md-4"></div>
    <div class="form-group col-md-4">
        <button type="submit" class="btn btn-success" style="margin-left:38px">Add Investment</button>
    </div>
</div>
{{--<form>--}}
{{--<div class="form-row col-lg-5">--}}
{{--<div class="col-lg-12">--}}
{{--<input type="text" class="form-control" placeholder="Customer ID">--}}
{{--</div>--}}

{{--</div>--}}
{{--</form>--}}
{{--<br>--}}
{{--<form>--}}
{{--<div class="form-row col-lg-5">--}}
{{--<div class="col">--}}
{{--<input type="text" class="form-control" placeholder="First name">--}}
{{--</div>--}}
{{--<div class="col">--}}
{{--<input type="text" class="form-control" placeholder="Last name">--}}
{{--</div>--}}
{{--</div>--}}
{{--</form>--}}
{{--<br>--}}
{{--<form>--}}
{{--<div class="form-row col-lg-5">--}}
{{--<div class="col">--}}
{{--<input type="text" class="form-control" placeholder="Cell No">--}}
{{--</div>--}}
{{--<div class="col">--}}
{{--<input type="text" class="form-control" placeholder="CNIC">--}}
{{--</div>--}}
{{--</div>--}}
{{--</form>--}}
{{--<br>--}}
{{--<form>--}}
{{--<div class="form-row col-lg-5">--}}
{{--<div class="col-lg-12">--}}
{{--<input type="text" class="form-control" placeholder="Address">--}}
{{--</div>--}}

{{--</div>--}}
{{--</form>--}}
{{--<div class="card row col-lg-5" style="font-family: Georgia;background-color: #9fcdff">--}}
{{--<div class="card-body">--}}

{{--<h3 class="card-title"><h3>Customer Name:</h3></h3>--}}
{{--<h3 class="card-subtitle mb-2 text-muted"><h3>Cell-no:</h3></h3>--}}
{{--<h3 class="card-subtitle mb-2 text-muted"><h3>Address:</h3></h3>--}}

{{--@foreach($comics as $comic)--}}
{{--<h6 class="card-subtitle mb-2 text-muted"><h3>Investment:Rs {{$comic->total_amount}}/-</h3></h6>--}}
{{--@endforeach--}}
{{----}}
{{--</div>--}}
{{--</div>--}}

{{--</form>--}}

{{--</div>--}}
</body>
</html>