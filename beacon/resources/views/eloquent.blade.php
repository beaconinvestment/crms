{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
    {{--<meta charset="UTF-8">--}}
    {{--<title>Eloquent Customers</title>--}}

    {{--<!-- CSS -->--}}
    {{--<!-- BOOTSTRAP -->--}}
    {{--<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">--}}
    {{--<style>--}}
        {{--body { padding-top:50px; } /* add some padding to the top of our site */--}}
    {{--</style>--}}
{{--</head>--}}
{{--<body class="container">--}}
{{--<div class="col-sm-8 col-sm-offset-2">--}}

    {{--<!-- BEARS -->--}}
    {{--<!-- loop over the bears and show off some things -->--}}
{{--@foreach ($customer as $customers)--}}

    {{--<!-- GET OUR BASIC BEAR INFORMATION -->--}}
        {{--<h2>{{ $customers->name }} <small>{{ $customers->cell_no }}</small></h2>--}}

        {{--<!-- SHOW OFF THE TREES -->--}}
        {{--<h4>Investment</h4>--}}
        {{--@foreach ($bear->trees as $tree)--}}
            {{--<p>{{ $tree->type }}</p>--}}
        {{--@endforeach--}}

    {{--<!-- SHOW OFF THE PICNICS -->--}}
        {{--<h4>Investment_Type/h4>--}}
        {{--@foreach ($bear->picnics as $picnic)--}}
            {{--<p>{{ $picnic->name }}: Taste Level {{ $picnic->taste_level }}</p>--}}
        {{--@endforeach--}}

    {{--@endforeach--}}

{{--</div>--}}
{{--</body>--}}
{{--</html>--}}

        <!DOCTYPE html>
<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>

<h2>Customers Table</h2>
@foreach ($customer as $customers)

<!-- GET OUR BASIC BEAR INFORMATION -->
{{--<h2>{{ $customers->name }} <small>{{ $customers->cell_no }}</small></h2>--}}
<table>
    <tr>
        <th>{{ $customers->name }}</th>
        <th>{{ $customers->cell_no }}</th>

    </tr>

</table>
@endforeach
</body>
</html>


