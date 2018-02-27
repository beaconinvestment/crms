<!-- create.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Create a Customer</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style>
        .bk{
            margin-left: 8%;
            margin-bottom: -5%;
            height: 20%;
            /*width: 2000px;*/
            text-align: center;
            background-color: #0056b3;
            border-radius: 0px 0px 30px 30px;
        }
        .bk h1{
            color: white;
        }
    </style>
</head>
<body>

<div class="container" style="padding: 0px;margin: 0px;">
    <div class="container col-lg-12 bk">
    <h1 style="font-family: Georgia;">Create A Customer</h1>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
    @endif
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div><br />
    @endif
    <div class="container col-lg-12">
        <br>
        <br>
        <br>

    </div>
<div class="container col-lg-12" style="padding-left: 200px">
    <form method="post" action="{{url('eloquent')}}">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="id">Customer ID:</label>
                <input type="text" class="form-control" name="id">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="fname">First Name:</label>
                <input type="text" class="form-control" name="fname">
            </div>
        </div>

    <div></div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="lname">Last Name:</label>
                <input type="text" class="form-control" name="lname">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="cell_no">Cell_no:</label>
                <input type="text" class="form-control" name="cell_no">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="cnic">CNIC:</label>
                <input type="text" class="form-control" name="cnic">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="address">Address:</label>
                <input type="text" class="form-control" name="address">
            </div>
        </div>
     <div class="row">
    <div class="col-md-4"></div>
    <div class="form-group col-md-4">
        <button type="submit" class="btn btn-primary" style="background-color: #0056b3">Add Customer</button>
    </div>
</div>
    </form>
</div>
</div>
</body>
</html>