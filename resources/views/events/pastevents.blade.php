@extends('layouts.site')
@section('content')

<div class="container">
  <div class="col-md-12">
    <h1>Events</h1>

    <hr>


    <div class="col-md-10 col-md-offset-1">
      <h3>Past Events</h3>
      @foreach($past as $past_event)
      <div class="col-md-4">
        <a href="{{ route('event',['id'=>$past_event->id]) }}">
          @if($past_event->image)
          <div class="col-md-12 event_image">
            <img class="img-responsive" src="{{ asset('myevents/'.$past_event->image) }}" width=100% height="150">
          </div>
          @else
              <div class="col-md-12 events-default-image">
                {{ str_limit($past_event->name,$limit = 1, $end = '') }}
              </div>
          @endif

        <div class="col-md-12">
          <h3>{{ $past_event->name }}</h3>
        </div>
      </a>
      </div>


      @endforeach

    </div>


    <div class="col-md-6">
      <a href="{{ route('events') }}"><h1>Upcoming Events ( {{count($upcoming)}} )</h1></a>

    </div>

    <div class="col-md-6">
      <a href="{{ route('allevents') }}"><h1>All Events ( {{count($events)}} )</h1></a>

    </div>



  </div>
</div>





@endsection
