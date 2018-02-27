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


<div class="container col-lg-12" style="padding-left: 200px">
    <form method="post" action="{{url('investment')}}">
        {{csrf_field()}}
        <div class="form-group col-md-4">
            <label for="customer_id">Customer info</label>
            <select id="customer_id" class="form-control">
                <option selected>Choose...</option>
                @foreach($customer as $customers)
                <option>{{$customers->id}}</option>
                    @endforeach
            </select>
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
                <label for="invetType">InvestType:</label>
                <input type="text" class="form-control" name="InvestType">
            </div>
        </div>



<div class="row">
    <div class="col-md-4"></div>
    <div class="form-group col-md-4">
        <button type="submit" class="btn btn-success" style="margin-left:38px">Add Investment</button>
    </div>
</div>

</body>
</html>