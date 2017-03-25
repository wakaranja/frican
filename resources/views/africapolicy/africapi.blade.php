@extends('africapolicy.dashboard')
@section('content')
<div class="col-md-12">
  <b class="pull-right">Welcome, {{ Auth::user()->name}}</b>
</div>

<div class="col-md-12 dashboard">
  Manage Posts, Events, Subscribers and settings from this page.
</div>

<div class="col-md-5 col-md-offset-1 dashboard">
  <div class="col-md-3">
    @if( count($posts) == 0 )
        We do not have a post yet.
    @elseif( count($posts) == 1 )
        <h1>{{ count($posts) }}</h1>
        post posted.
    @elseif( count($posts) > 1 )
        <h1>{{ count($posts) }}</h1>
        posts posted.
    @endif
  </div>
  <div class="col-md-9">
    <b>Latest 3 Articles:</b><br>
    @foreach($posts as $post)
    @if( $loop->index < 3)
      <i>{{ $loop->index+1 }}. {{ $post->title }}</i><br>
    @endif
    @endforeach
    <br>
    <a href="{{ url('/newpost') }}"><i class="fa fa-plus"></i> New Post</a>
  </div>

</div>

<div class="col-md-5 col-md-offset-1 dashboard">
  <div class="col-md-3">
    @if( count($events) == 0 )
        We do not have any event as yet.
    @elseif( count($events) == 1 )
        <h1>{{ count($events) }}</h1>
        Event organised.
    @elseif( count($events) > 1 )
        <h1>{{ count($events) }}</h1>
        Events Organised.
    @endif
  </div>
  <div class="col-md-9">
    <b>Latest 3 Events:</b><br>
    @foreach($events as $event)
    @if( $loop->index < 3)
      <i>{{ $loop->index+1 }}. {{ $event->name }}</i><br>
    @endif
    @endforeach
    <br>
    <a href="{{ url('/newevent')}}"><i class="fa fa-plus"></i> New Event</a>
  </div>


</div>



@endsection
