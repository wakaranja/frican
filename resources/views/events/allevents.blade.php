@extends('layouts.site')
@section('content')

<div class="container">
  <div class="col-md-12">
    <h1>All Events</h1>

    <hr>
    <div class="col-md-12">
      {{ $events->links() }}
    </div>

    <hr>
    <div class="col-md-10 col-md-offset-1">

      @if( count($events)>0 )
      @foreach($events as $event)
      <div class="col-md-4">
        <a href="{{ route('event',['id'=>$event->id]) }}">
          @if($event->image)
          <div class="col-md-12 event_image">
            <img class="img-responsive" src="{{ asset('myevents/'.$event->image) }}" width=100% height="150">
          </div>
          @else
              <div class="col-md-12 events-default-image">
                {{ str_limit($event->name,$limit = 1, $end = '') }}
              </div>
          @endif

        <div class="col-md-12">
          {{ $event->name }}
        </div>
      </a>
      </div>
      @endforeach
      @else
        We do not have any event so far.
      @endif

    </div>

    <div class="col-md-12">
      {{ $events->links() }}
    </div>




    <div class="col-md-6">
      <a href="{{ route('pastevents') }}"><h1>Past Events ( {{count($past)}} )</h1></a>

    </div>

    <div class="col-md-6">
      <a href="{{ route('events') }}"><h1>Upcoming Events ( {{count($upcoming)}} )</h1></a>

    </div>



  </div>
</div>

<div class="col-md-12">
  {{ $events->links() }}
</div>



@endsection
