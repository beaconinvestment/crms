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
        .jumbotron .h1, .jumbotron h1 {
            color:white;
        }
        .jumbotron .p, .jumbotron p {
            color:white;
        }
    </style>
</head>
<body>
{{--<div class="jumbotron" style="margin-bottom: 0px;background-color: #0069d9;">--}}
    {{--<h1>Beacon Investment CRMS</h1>--}}
    {{--<p>Welcome to crms system admin here you can edit , delete and manage your data....</p>--}}
{{--</div>--}}

{{--<nav class="navbar navbar-default">--}}
    {{--<div class="container-fluid">--}}
        {{--<div class="navbar-header">--}}
            {{--<a class="navbar-brand pull-left" href="#">Welcome Admin!!!!</a>--}}
        {{--</div>--}}
        {{--<ul class="nav navbar-nav">--}}
            {{--<li class="active"><a href="/">Home</a></li>--}}

        {{--</ul>--}}
    {{--</div>--}}
{{--</nav>--}}
{{--<div class="container" style="margin-left: 0px;--}}
    {{--margin-right: 0px;">--}}
    {{--<div class="container col-lg-2 pull-left" style="padding-right: 0px;--}}
    {{--padding-left: 0px;">--}}

        {{--<nav class="navbar navbar-default">--}}
            {{--<div class="container-fluid">--}}
                {{--<div class="navbar-header center-block">--}}
                    {{--<a class="navbar-brand pull-left" href="#">Options</a>--}}
                {{--</div>--}}
                {{--<button type="button" class="btn btn-primary btn-block">Option 1</button>--}}
                {{--<button type="button" class="btn btn-primary btn-block">Option 2</button>--}}
                {{--<button type="button" class="btn btn-primary btn-block">Option 3</button>--}}
                {{--<button type="button" class="btn btn-primary btn-block">Option 4</button>--}}
                {{--<button type="button" class="btn btn-primary btn-block">Option 5</button>--}}
                {{--<button type="button" class="btn btn-primary btn-block">Option 6</button>--}}
                {{--<ul class="nav navbar-nav">--}}


                {{--</ul>--}}
            {{--</div>--}}
        {{--</nav>--}}


    {{--</div>--}}
    <div class="container col-lg-8">
        <form action="/search" method="POST" role="search">
            {{ csrf_field() }}
            <div class="input-group">
                <input type="text" class="form-control" name="q"
                       placeholder="Search"> <span class="input-group-btn">
                    <button type="submit" class="btn btn-default">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </span>
            </div>
        </form>
        <br />

        @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div><br />
        @endif
        <table class="table table-striped">
            <thead>
            <tr>
                <th>total_amount</th>
                <th>customer_id</th>
                <th>investType</th>
                <th colspan="2">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($investment as $investments)
                <tr>
                    <td>{{$investments['total_amount']}}</td>
                    <td>{{$investments['customer_id']}}</td>
                    <td>{{$investments['investType']}}</td>
                    <td><a href="{{action('investmentController@edit', $investments['id'])}}" class="btn btn-warning">Edit</a></td>
                    <td>
                        <form action="{{action('investmentController@destroy', $investments['id'])}}" method="post">
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