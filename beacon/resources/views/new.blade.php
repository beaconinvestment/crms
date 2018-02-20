<html>
<head>
    <title>Search functionality</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"
          href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
{{--<div class="dashboard-tab">--}}
    {{--<div class="container">--}}
        {{--<form action="/search" method="POST" role="search">--}}
            {{--{{ csrf_field() }}--}}
            {{--<div class="input-group">--}}
                {{--<input type="text" class="form-control" name="q"--}}
                       {{--placeholder="Search"> <span class="input-group-btn">--}}
                    {{--<button type="submit" class="btn btn-default">--}}
                        {{--<span class="glyphicon glyphicon-search"></span>--}}
                    {{--</button>--}}
                {{--</span>--}}
            {{--</div>--}}
        {{--</form>--}}

        {{--@if(isset($comics))--}}
            {{--<div class="data-listing">--}}

                {{--@foreach($comics as $dummy)--}}
                    {{--<div class="col-lg-4">--}}
                        {{--<ul>--}}
                            {{--<li><img src="/uploads/avatars/{{$dummy->cover_avatar}}" style="width:100px; height:150px; float:left; margin-right:25px;"></li>--}}
                            {{--<li>--}}
                                {{--<p>Title: {{$dummy->comic_title}}</p>--}}
                                {{--<p>Artist: {{$dummy->comic_title}}</p>--}}
                                {{--<p>Cover Artist: {{$dummy->cover_artist}}</p>--}}
                                {{--<p>Writer: {{$dummy->comic_writer}}</p>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                    {{--<div class="col-lg-8">--}}
                        {{--<div class="left-artist">--}}
                            {{--<p>Relesed Date:  &nbsp; {{$dummy->comic_release_date}}</p>--}}
                            {{--<ul>--}}
                                {{--<li class="notes">Notes: &nbsp;</li>--}}
                                {{--<li class="data-notes data-notes-search">{{$dummy->comic_description}}</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}

                        {{--<div class="button-data">--}}
                            {{--<a href="" data-toggle="modal" data-target="#myModal{{ $dummy['id'] }}" class="confirm">Add to Subscription</a>--}}

                        {{--</div>--}}

                    {{--</div>--}}
                {{--@endforeach--}}
            {{--</div>--}}
            {{--{!! $comics->render() !!}@endif--}}
    {{--</div>--}}

    {{--<div class="container">--}}
        {{--@if(isset($details))--}}
            {{--<p> The Search results for your query <b> {{ $query }} </b> are :</p>--}}
            {{--<div class="data-listing">--}}

                {{--@foreach($details as $dummy)--}}
                    {{--<div class="col-lg-4">--}}
                        {{--<ul>--}}
                            {{--<li><img src="/uploads/avatars/{{$dummy->cover_avatar}}" style="width:100px; height:150px; float:left; margin-right:25px;"></li>--}}
                            {{--<li>--}}
                                {{--<p>Title: {{$dummy->comic_title}}</p>--}}
                                {{--<p>Artist: {{$dummy->comic_title}}</p>--}}
                                {{--<p>Cover Artist: {{$dummy->cover_artist}}</p>--}}
                                {{--<p>Writer: {{$dummy->comic_writer}}</p>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                    {{--<div class="col-lg-8">--}}
                        {{--<div class="left-artist">--}}
                            {{--<p>Relesed Date:  &nbsp; {{$dummy->comic_release_date}}</p>--}}
                            {{--<ul>--}}
                                {{--<li class="notes">Notes: &nbsp;</li>--}}
                                {{--<li class="data-notes data-notes-search">{{$dummy->comic_description}}</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}

                        {{--<div class="button-data">--}}
                            {{--<a href="" data-toggle="modal" data-target="#myModal{$dummy['id']}" class="confirm">Add to Subscription</a>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                {{--@endforeach--}}
            {{--</div>--}}

            {{--@if($details){!! $details->render() !!}@endif--}}
        {{--@elseif(isset($message))--}}
            {{--<p>{{ $message }}</p>--}}
        {{--@endif--}}
    {{--</div>--}}
    {{--@foreach($one as $ones)--}}
        {{--{{$ones->total_amount}}--}}

     {{--@endforeach--}}
     @foreach($two as $twos)
         {{$twos->name}}
@endforeach
{{--{{$one}}--}}
{{--{{$two}}--}}
</body>
</html>