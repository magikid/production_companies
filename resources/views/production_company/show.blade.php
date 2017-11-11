@extends('layouts.app')

@section('title', 'Production Company')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <h1>{{$production_company->name}}</h1>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-md-2"><h2>Movies</h2></div>
  </div>
  @include('movie.header')
  @each('movie._movie', $production_company->movies, 'movie')
@endsection
