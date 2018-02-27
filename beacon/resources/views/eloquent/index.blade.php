<!-- index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
    /*.jumbotron .h1, .jumbotron h1 {*/
        /*color:white;*/
    /*}*/
    /*.jumbotron .p, .jumbotron p {*/
        /*color:white;*/
    /*}*/

    .bk{
        /*margin-left: 8%;*/
        /*margin-bottom: -20px;*/
        margin-top: -20px;
        height: 120px;
        /*width: 2000px;*/
        text-align: center;
        background-color: #0056b3;
        border-radius: 0px 0px 30px 30px;
    }
    .bk h1{
        color: white;
        font-size: 45px;
        margin-top: 30px;
    }

    .bgi{
        width: 7%;
        margin-bottom: -6%;
    }


</style>
</head>
<body>
{{--<img src="download.png" class="img-rounded" alt="Cinque Terre">--}}
<img src="data:image/png;base64,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" class="bgi">

<div class="container bk" style="margin-bottom:0px;font-family: Georgia;background-color: #0056b3">
    <h1>Beacon Investment Customer Management System</h1>
    {{--<p>Welcome to crms system admin here you can edit , delete and manage your data....</p>--}}
</div>
<div class="container col-lg-12">
<br>
</div>
<div class="container col-lg-2" style="
    padding-left: 0px;
    padding-right: 0px;">
    <ul class="btn-group" style="padding-left: 0px;width: 98px;">
        <a href="\"><button type="button" class="btn btn-primary btn-block text-center"><h3><span class="glyphicon glyphicon-home"></span></h3></button></a>
        <a href="\eloquent\create"><button type="button" class="btn btn-primary btn-block text-center"><h3><span class="glyphicon glyphicon-user"></span></h3></button></a>
        <a href="\eloquent"><button type="button" class="btn btn-primary btn-block text-center"><h3><span class="glyphicon glyphicon-share"></span></h3></button></a>
        <a href="\eloquent"><button type="button" class="btn btn-primary btn-block text-center"><h3><span class="glyphicon glyphicon-edit"></span></h3></button></a>
        <a href="\eloquent"><button type="button" class="btn btn-primary btn-block text-center"><h3><span class="glyphicon glyphicon-camera"></span></h3></button></a>
    </ul>
</div>
<div class="container col-lg-10">
    <div class="container">
    </div>
    <div class="container col-lg-10">
        <form action="/searchcustomer" method="POST" role="search">
            {{ csrf_field() }}
            <div class="input-group">
                <input type="text" class="form-control" name="q" placeholder="Search Customers Here..."> <span class="input-group-btn">
                    <button type="submit" class="btn btn-default">
                        <span class="glyphicon glyphicon-search"></span>
                    </button></span>
                </span>
            </div>
        </form>
        <br />
    <br />
        @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div><br />
    @endif
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Customer ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Cell NO</th>
            <th>CNIC</th>
            <th>Address</th>

            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($customer as $customers)
            <tr>
                <td>{{$customers['id']}}</td>
                <td>{{$customers['fname']}}</td>
                <td>{{$customers['lname']}}</td>
                <td>{{$customers['cell_no']}}</td>
                <td>{{$customers['cnic']}}</td>
                <td>{{$customers['address']}}</td>
                <td><a href="{{action('BeaconicController@edit', $customers['id'])}}" class="btn btn-warning">Edit</a></td>
                <td>
                    <form action="{{action('BeaconicController@destroy', $customers['id'])}}" method="post">
                        {{csrf_field()}}
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</div>
</body>
</html>