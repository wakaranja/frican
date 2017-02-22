@extends('layouts.site')
@section('content')
  <div class="container">
    <h1>News</h1>
    <div class="col-md-8 col-md-offset-2">
      {{ $news->links() }}
    </div>

    @foreach($news as $new)
    <div class="col-md-8 col-md-offset-2">
      <b>Title: {{ $new->title }}</b>
      <br><br>
      {{$new->content}}
      <br>
      <hr>
    </div>
    @endforeach
    <div class="col-md-8 col-md-offset-2">
      {{ $news->links() }}
    </div>


  </div>

@endsection
