@extends('layouts.app')

@section('title', 'Add an actor')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <h1>Add an actor</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      {{ Form::model($actor, ['route' => 'actors.store']) }}
      <div class="form-group">
        {{ Form::label('name', 'Actor\'s name') }}
        {{ Form::text('name', '', ['class' => 'form-control']) }}
      </div>
      {{ Form::submit('Create', ['class' => 'btn btn-primary']) }}
      {{ Form::close() }}
    </div>
  </div>
@endsection
