@extends('layouts.app')

@section('title', 'Movies')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <h2>Movies</h2>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <a href="{{ route('movies.create') }}">Add new movie</a>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <table class="table">
        <thead>
          <tr>
            <th>Name</th>
            <th>Release Date</th>
            <th>Income</th>
            <th>Expense</th>
            <th>Production Company</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($movies as $movie)
          <tr>
            <td>{{ $movie->name }}</td>
            <td>{{ $movie->release_date }}</td>
            <td>{{ money_format('$%i', $movie->income) }}</td>
            <td>{{ money_format('$%i', $movie->expense) }}</td>
            <td><a href="{{ route('production_companies.show', $movie->production_company->id) }}">{{$movie->production_company->name}}</a>
              <td><a href="{{ route('movies.show', $movie->id) }}">Show</a> | <a href="{{ route('movies.edit', $movie->id) }}">Edit</a> | {{ Form::open(['method' => 'DELETE', 'route' => ['movies.destroy', $movie->id]]) }}{{Form::submit('Delete', ['class'=>'btn'])}}{{Form::close()}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
