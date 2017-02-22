@extends('layouts.site')
@section('content')
  <div class="container">
    <h1>Posts</h1>
    <div class="row title">
        {{ $posts->links() }}
    </div>
      @foreach($posts as $post)
      <div class="col-md-6">

          <div class="col-md-3">
            <img src="/img/300b300.jpg" alt="" width='250' height='250' class="img-responsive">
          </div>
          <div class="col-md-9">
            <div class="col-md-12">
              <h5>  <a href="{{ route('post',['id'=>$post->id]) }}">{{$post->title}}</h5></a>

            </div>
            <div class="col-md-12">
              {{$post->excerpt}}
              <hr>
            </div>
          </div>

      </div>

      @endforeach
      <div class="row title">
          {{ $posts->links() }}
      </div>
  </div>

@endsection
