@extends('layouts.master')
@section('content')
  <div class="page-header">
    <a href="{{route('contents.index')}}" class="btn btn-default">
      &larr; Back to content
    </a>
  </div>
  <p class="lead">{{$content->subject}}</p>
  <p>
    {{$post->text}}
  </p>
  <blockquote>
    <small>Editor</small>
    {{$post->user->username}}
  </blockquote>
@stop
