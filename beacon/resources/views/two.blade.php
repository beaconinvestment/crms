
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .jumbotron .h1, .jumbotron h1 {
            color:white;
        }
        .jumbotron .p, .jumbotron p {
            color:white;
        }
        .bn h3{
            color:white;

        }
.bn h1{
    color:white;
    height: 50px;
}

    </style>
</head>
<body>
<div class="jumbotron bg" style="margin-bottom:0px;margin-top:0px;font-family: Georgia;background-color: #0056b3;max-height:200px; ">
    <h1>Search Results Generated</h1>
    <p>given your Search parameters following search was generated.......</p>
</div>


<div class="container col-lg-12">
    <br>
</div>
<div class="container col-lg-2" style="
    padding-left: 0px;
    padding-right: 0px;">

    <ul class="btn-group" style="padding-left: 0px;width: 98px;">
        <a href="\"><button type="button" class="btn btn-primary btn-block text-center"><h3><span class="glyphicon glyphicon-home"></span></h3></button></a>
        <a href="\investment"><button type="button" class="btn btn-primary btn-block text-center"><h3><span class="glyphicon glyphicon-user"></span></h3></button></a>
        <a href="\eloquent"><button type="button" class="btn btn-primary btn-block text-center"><h3><span class="glyphicon glyphicon-share"></span></h3></button></a>
        <a href="\eloquent"><button type="button" class="btn btn-primary btn-block text-center"><h3><span class="glyphicon glyphicon-edit"></span></h3></button></a>
        <a href="\eloquent"><button type="button" class="btn btn-primary btn-block text-center"><h3><span class="glyphicon glyphicon-camera"></span></h3></button></a>

    </ul>
</div>
<div class="container col-lg-10">
    <div class="container">
     </div>
    <div class="container col-lg-10">
        {{--<div class="card bn" style="font-family: Georgia;background-color: #9fcdff">--}}
            {{--<div class="card-body">--}}
                {{--@foreach($doom as $dooms)--}}
                    {{--<h3 class="card-title"><h3>Customer Name: {{$dooms->fname}}</h3></h3>--}}
                    {{--<h3 class="card-subtitle mb-2 text-muted"><h3>Cell-no: {{$dooms->cell_no}}</h3></h3>--}}
                        {{--<h3 class="card-subtitle mb-2 text-muted"><h3>Address: {{$dooms->address}}</h3></h3>--}}
                {{--@endforeach--}}
                {{--@foreach($comics as $comic)--}}
                    {{--<h6 class="card-subtitle mb-2 text-muted"><h3>Investment:Rs {{$comic->total_amount}}/-</h3></h6>--}}
                {{--@endforeach--}}
                   {{--<h3><a href="/eloquent" class="btn btn-primary pull-right">Back</a></h3>--}}
            {{--</div>--}}
        {{--</div>--}}
        <div class="container col-lg-12">
            <br>
        </div>
        <table class="table table-striped">
            <thead>
            <tr><th>Beacon ID</th>
                <th>Firstname Name</th>
                <th>Cell N0</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                    @foreach($doom as $dooms)
                    <td>{{$dooms->id}}</td>
                    <td>{{$dooms->fname}}</td>
                    <td>{{$dooms->cell_no}}</td>
                    @endforeach

                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="container col-lg-12" style="padding-left: 200px">
    <form method="post" action="{{url('investment')}}">
        {{csrf_field()}}

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