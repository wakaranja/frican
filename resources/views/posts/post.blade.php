@extends('layouts.app')
@section('content')
  <div class="col-md-8 col-md-offset-2">
    <h1>{{ $post->title }}</h1>
    <hr>
    {{ $post->content }}

  </div>
@endsection
