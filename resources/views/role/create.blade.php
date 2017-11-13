@extends('layouts.app')

@section('title', 'Add a role')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <h1>Add a role</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      {{ Form::model($actor, ['route' => 'roles.store']) }}
      <div class="form-group">
        {{ Form::label('character_name', 'Character\'s Name') }}
        {{ Form::text('character_name', null, ['class' => 'form-control']) }}
      </div>
      <div class="form-group">
        {{ Form::label('base_pay', 'Base Pay') }}
        {{ Form::text('base_pay', null, ['class' => 'form-control']) }}
      </div>
      <div class="form-group">
        {{ Form::label('revenue_share', 'Revenue Share Percentage') }}
        {{ Form::text('revenue_share', null, ['class' => 'form-control']) }}
      </div>
      <div class="form-group">
        {{ Form::label('actor_id', 'Actor') }}
        {{ Form::select('actor_id', $actors, null, ['class' => 'form-control']) }}
      </div>
      <div class="form-group">
        {{ Form::label('movie_id', 'Movie') }}
        {{ Form::select('movie_id', $movies, null, ['class' => 'form-control']) }}
      </div>
      {{ Form::submit('Create', ['class' => 'btn btn-primary']) }}
      {{ Form::close() }}
    </div>
  </div>
@endsection
