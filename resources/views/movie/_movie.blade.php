<div class="row">
  <div class="col-md-2">
    <p><a href="{{route('movies.show', $movie->id)}}">{{$movie->name}}</a></p>
  </div>
  <div class="col-md-2">
    <p>{{$movie->release_date}}</p>
  </div>
  <div class="col-md-2">
    <p>{{money_format('$%i', $movie->income)}}</p>
  </div>
  <div class="col-md-2">
    <p>{{money_format('$%i', $movie->expense)}}</p>
  </div>
  <div class="col-md-2">
    @if($movie->income > $movie->expense)
      <p>Success</p>
    @else
      <p>Failure</p>
    @endif
  </div>
</div>
