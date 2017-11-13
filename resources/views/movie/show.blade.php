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
    <div class="col-md-12">
      <h2>Script Stats</h2>
    </div>
  </div>
  <div class="row">
    <div class="col-md-2"><strong>Actor</strong></div>
    <div class="col-md-2"><strong>Lines spoken</strong></div>
  </div>
  @foreach($line_counts as $actor => $count)
    <div class="row">
      <div class="col-md-2">{{$actor}}</div>
      <div class="col-md-2">{{$count}}</div>
    </div>
  @endforeach
  <div class="row">
    <div class="col-md-2"><strong>Actor</strong></div>
    <div class="col-md-2"><strong>Words Spoken</strong></div>
  </div>
  @foreach($spoken_word_count as $actor => $count)
    <div class="row">
      <div class="col-md-2">{{$actor}}</div>
      <div class="col-md-2">{{$count}}</div>
    </div>
  @endforeach
  <div class="row">
    <div class="col-md-2"><strong>Actor</strong></div>
    <div class="col-md-2"><strong>References by Other Characters</strong></div>
  </div>
  @foreach($character_references as $actor => $count)
    <div class="row">
      <div class="col-md-2">{{$actor}}</div>
      <div class="col-md-2">{{$count}}</div>
    </div>
  @endforeach
  <hr>

  <div class="row">
    <div class="col-md-2"><h2>Actors</h2></div>
  </div>
  @include('actor.header')
  @each('actor._actor', $movie->actors, 'actor')
@endsection
