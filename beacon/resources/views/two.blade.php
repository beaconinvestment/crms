<html>
<head>
    <title>Search functionality</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"
          href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<table class="table table-striped">
    <thead>
    <tr>
        <th>Name</th>
        <th>Cell_NO</th>

        <th colspan="2">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($comics as $comic)
        <tr>

            <td>{{$comic['name']}}</td>
            <td>{{$comic['cell_no']}}</td>

            <td><a href="{{action('investmentController@edit', $comic['id'])}}" class="btn btn-warning">Edit</a></td>
            <td>
                <form action="{{action('investmentController@destroy', $comic['id'])}}" method="post">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>

    @endforeach
    </tbody>
</table>
<a href="/eloquent" class="btn btn-warning">Back</a>

</body>
</html>