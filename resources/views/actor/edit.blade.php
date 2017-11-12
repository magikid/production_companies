@extends('layouts.app')

@section('title', 'Edit an actor')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <h1>Edit an actor</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      {{ Form::model($actor, ['method' => 'PUT', 'route' => ['actors.update', $actor->id]]) }}
      <div class="form-group">
        {{ Form::label('name', 'Actor\'s name') }}
        {{ Form::text('name', null, ['class' => 'form-control']) }}
      </div>
      {{ Form::submit('Create', ['class' => 'btn btn-primary']) }}
      {{ Form::close() }}
    </div>
  </div>
@endsection
