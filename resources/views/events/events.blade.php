@extends('layouts.site')
@section('content')

<div class="container">
  <div class="col-md-12">
    <h1 class="africapi-events-title">Events</h1>  
<hr>
<div class="col-md-8 africapi-box">
    <h1 class="africapi-events-title">Upcoming Events</h1>

    <hr>
    <div class="col-md-10 col-md-offset-1">
      <h3 class="africapi-events-title">Today's Events</h3>
      @if( count($today)>0 )
      @foreach($today as $todays)
      <div class="col-md-4">
        <a href="{{ route('event',['id'=>$todays->id]) }}">
          @if($todays->image)
          <div class="col-md-12 event_image">
            <img class="img-responsive" src="{{ asset('myevents/'.$todays->image) }}" width=100% height="150">
          </div>
          @else
              <div class="col-md-12 events-default-image">
                {{ str_limit($todays->name,$limit = 1, $end = '') }}
              </div>
          @endif

        <div class="col-md-12">
          <h3>{{ $todays->name }}</h3>
        </div>
      </a>
      </div>
      @endforeach
      @else
        We do not have any event today. Check the upcoming events.
      @endif

    </div>
    

    <div class="col-md-10 col-md-offset-1"> 
      <h3 class="africapi-events-title">Upcoming Events</h3>
      @if( count($upcoming)>0 )
      @foreach($upcoming as $upcoming_event)
      <div class="col-md-4">
        <a href="{{ route('event',['id'=>$upcoming_event->id]) }}">
          @if($upcoming_event->image)
          <div class="col-md-12 event_image">
            <img class="img-responsive" src="{{ asset('myevents/'.$upcoming_event->image) }}" width=100% height="150">
          </div>
          @else
              <div class="col-md-12 events-default-image">
                {{ str_limit($upcoming_event->name,$limit = 1, $end = '') }}
              </div>
          @endif

        <div class="col-md-12">
          <h3>{{ $upcoming_event->name }}</h3>
        </div>
      </a>
      </div>

      @endforeach
      @else
        We do not have any upcoming event. Check back soon.
      @endif
    </div>
      
    </div>




<div class="col-md-4">
  <div class="col-md-12 africapi-box">
      <a href="{{ route('pastevents') }}"><h1 class="africapi-events-title">Past Events ( {{count($past)}} )</h1></a>

    </div>

    <div class="col-md-12 africapi-box">
      <a href="{{ route('allevents') }}"><h1 class="africapi-events-title">All Events ( {{count($events)}} )</h1></a>

    </div>
</div>
    



  </div>
</div>





@endsection
