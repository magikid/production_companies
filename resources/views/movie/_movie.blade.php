<div class="row">
  <div class="col-md-2">
    <strong>Movie title</strong>
    <p><a href="{{route('movies.show', $movie->id)}}">{{$movie->name}}</a></p>
  </div>
  <div class="col-md-2">
    <strong>Release Date</strong>
    <p>{{$movie->release_date}}</p>
  </div>
  <div class="col-md-2">
    <strong>Income</strong>
    <p>{{money_format('$%i', $movie->income)}}</p>
  </div>
  <div class="col-md-2">
    <strong>Expense</strong>
    <p>{{money_format('$%i', $movie->expense)}}</p>
  </div>
  <div class="col-md-2">
    <strong>Successful?</strong>
    @if($movie->income > $movie->expense)
      <p>Success</p>
    @else
      <p>Failure</p>
    @endif
</div>
<hr>
