@extends('layouts.app')

@section('title', 'Create a movie')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <h1>Create a new movie</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      {{ Form::model($movie, ['route' => 'movies.store']) }}
      <div class="form-group">
        {{ Form::label('name', 'Movie Name') }}
        {{ Form::text('name', '', ['class' => 'form-control']) }}
      </div>
      <div class="form-group">
        {{ Form::label('release_date', 'Release Date') }}
        {{ Form::date('release_date', '', ['class' => 'form-control']) }}
      </div>
      <div class="form-group">
        {{ Form::label('income', 'Movie Income') }}
        {{ Form::number('income', '', ['class' => 'form-control', 'min' => '0']) }}
      </div>
      <div class="form-group">
        {{ Form::label('expense', 'Movie Expenses') }}
        {{ Form::number('expense', '', ['class' => 'form-control', 'min' => '0']) }}
      </div>
      <div class="form-group">
        {{ Form::label('production_company', 'Production Company') }}
        {{ Form::select('production_company', $production_companies, null, ['class' => 'form-control']) }}
      </div>
      {{ Form::submit('Create', ['class' => 'btn btn-primary']) }}
      {{ Form::close() }}
    </div>
  </div>
@endsection
