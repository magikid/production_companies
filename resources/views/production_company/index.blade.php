@extends('layouts.app')

@section('title', 'Production Company')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <h2>Production Companies</h2>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <a href="{{ route('production_companies.create') }}">Add new Production Company</a>
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
          @foreach($production_companies as $production_company)
          <tr>
            <td>{{ $production_company->name }}</td>
            <td>
            @foreach($production_company->movies as $movie)
              <a href="{{ route('movies.show', $movie->id) }}">{{$movie->name}}</a>@if(!$loop->last),@endif
            @endforeach
            </td>
            <td><a href="{{ route('movies.show', $movie->id) }}">Show</a> | <a href="{{ route('movies.edit', $movie->id) }}">Edit</a> 
              <td><a href="{{ route('production_companies.show', $production_company->id) }}">Show</a> | <a href="{{ route('production_companies.edit', $production_company->id) }}">Edit</a> | {{ Form::open(['method' => 'DELETE', 'route' => ['production_companies.destroy', $production_company->id]]) }}{{Form::submit('Delete', ['class' => 'btn'])}}{{Form::close()}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
