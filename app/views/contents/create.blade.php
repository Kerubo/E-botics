@extends('layouts.master')
@section('content')
  <div class="page-header">
    <h2>
      Update Content
    </h2>
  </div>
  {{Form::open(['route' => 'contents.store'])}}
  <div class="form-group">
    {{Form::text('title', null,['class' => 'form-control', 'placeholder' =>'Subject'])}}
  </div>

  <div class="form-group">
    {{Form::textarea('text', null,['class' => 'form-control', 'placeholder' =>'content'])}}
  </div>
  <div class="form-group">
    {{Form::submit('update', ['class' => 'btn btn-success'])}}
  </div>
  {{Form::close()}}
@stop
