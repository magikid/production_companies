@extends('layouts.app')

@section('title', 'Movies')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <h1>{{$movie->name}}</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-2">
      <strong>Release date:</strong>
    </div>
    <div class="col-md-2">
      {{$movie->release_date}}
    </div>
  </div>

  <div class="row"> <div class="col-md-2"> <strong>Income</strong>
    </div>
    <div class="col-md-2">
      {{money_format('$%i', $movie->income)}}
    </div>
  </div>

  <div class="row">
    <div class="col-md-2">
      <strong>Expense</strong>
    </div>
    <div class="col-md-2">
      {{money_format('$%i', $movie->expense)}}
    </div>
  </div>

  <div class="row">
    <div class="col-md-2">
      <strong>Successful film?</strong>
    </div>
    <div class="col-md-2">
      @if($movie->income > $movie->expense)
        Success
      @else
        Failure
      @endif
    </div>
  </div>


  <div class="row">
    <div class="col-md-2">
      <strong>Production Company</strong>
    </div>
    <div class="col-md-2">
      <a href="{{route('production_companies.show', $movie->production_company)}}">{{$movie->production_company->name}}</a>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-md-2"><h2>Actors</h2></div>
  </div>
  @include('actor.header')
  @each('actor._actor', $movie->actors, 'actor')
@endsection
