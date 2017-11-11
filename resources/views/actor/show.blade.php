@extends('layouts.app')

@section('title', 'Actor')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <h1>{{$actor->name}}</h1>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-md-12">
      <h2>Roles</h2>
    </div>
  </div>
  <div class="row">
    <div class="col-md-2">
      <strong>Movie title</strong>
    </div>
    <div class="col-md-2">
      <strong>Character Name</strong>
    </div>
    <div class="col-md-2">
      <strong>Base Pay</strong>
    </div>
    <div class="col-md-2">
      <strong>Revenue Share</strong>
    </div>
  </div>
  @foreach($actor->movies as $movie)
    <div class="row">
      <div class="col-md-2">
        <p><a href="{{route('movies.show', $movie->id)}}">{{$movie->name}}</a></p>
      </div>
      <div class="col-md-2">
        <p>{{$movie->role->character_name}}</p>
      </div>
      <div class="col-md-2">
        <p>{{money_format('$%i', $movie->role->base_pay)}}</p>
      </div>
      <div class="col-md-2">
        <p>{{$movie->role->revenue_share}}%</p>
      </div>
    </div>
  @endforeach
@endsection
