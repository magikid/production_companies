@extends('layouts.app')

@section('title', 'Actors')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <h2>Actors</h2>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <a href="{{ route('actors.create') }}">Add new actor</a>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <table class="table">
        <thead>
          <tr>
            <th>Name</th>
            <th>Movies</th>
          </tr>
        </thead>
        <tbody>
          @foreach($actors as $actor)
          <tr>
            <td>{{ $actor->name }}</td>
            @forelse($actor->movies as $movie)
              <td><a href="{{ route('movies.show', $movie->id) }}">{{$movie->name}}</a>@if(!$loop->last),@endif</td>
            @empty
              <td></td>
            @endforelse
            <td><a href="{{ route('actors.show', $actor->id) }}">Show</a> | <a href="{{ route('actors.edit', $actor->id) }}">Edit</a> | {{ Form::open(['method' => 'DELETE', 'route' => ['actors.destroy', $actor->id]]) }}{{Form::submit('Delete', ['class' => 'btn'])}}{{Form::close()}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
