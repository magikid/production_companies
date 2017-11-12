@extends('layouts.app')

@section('title', 'Update a movie')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <h1>Update a movie</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      {{ Form::model($movie, ['method' => 'PUT', 'route' => ['movies.update', $movie->id]]) }}
      <div class="form-group">
        {{ Form::label('name', 'Movie Name') }}
        {{ Form::text('name', null, ['class' => 'form-control']) }}
      </div>
      <div class="form-group">
        {{ Form::label('release_date', 'Release Date') }}
        {{ Form::date('release_date', null, ['class' => 'form-control']) }}
      </div>
      <div class="form-group">
        {{ Form::label('income', 'Movie Income') }}
        {{ Form::number('income', null, ['class' => 'form-control', 'min' => '0']) }}
      </div>
      <div class="form-group">
        {{ Form::label('expense', 'Movie Expenses') }}
        {{ Form::number('expense', null, ['class' => 'form-control', 'min' => '0']) }}
      </div>
      <div class="form-group">
        {{ Form::label('production_company', 'Production Company') }}
        {{ Form::select('production_company', $production_companies, null, ['class' => 'form-control']) }}
      </div>
      {{ Form::submit('Update', ['class' => 'btn btn-primary']) }}
      {{ Form::close() }}
    </div>
  </div>
@endsection
