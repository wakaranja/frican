@extends('layouts.site')
@section('content')

@if($event->image)
<div class="col-md-12 event_image">
  <img  src="{{ asset('myevents/'.$event->image) }}"  width=100% height=300px>
</div>
@else
    <div class="col-md-12 event-default-image">

    </div>
@endif

      <div class="col-md-8 col-md-offset-2 event">
        <h3><b>Event: </b>{{ $event->name }}</h3><hr>


      <div class="col-md-12">
        <div class="col-md-6">
          <b><i class="fa fa-calendar"></i> When? </b>{{ $event->created_at->format('l-jS-F-Y') }}</br>
          <b><i class="fa fa-clock-o"></i> Time: </b>{{ \Carbon\Carbon::parse($event->from)->format('h:i:A') }} - {{ \Carbon\Carbon::parse($event->to)->format('h:i:A') }}</br>
          <b><i class="fa fa-map-marker"></i> Where? </b>{{ $event->venue }} <a href="{{ $event->location }}" target="_blank">View Map</a></br>
        </div>

        <div class="col-md-6">
          <b><i class="fa fa-user"></i> Organiser? </b>{{ $event->organizer }}</br>
          @if( $event->ticket == 0 )
          <b><i class="fa fa-usd"></i> Charges: </b>Free
          @else
          <b><i class="fa fa-usd"></i> Charges: </b>Ksh.{{ $event->ticket }}</br>
          <b><i class="fa fa-info"></i> Details: </b>{{ $event->ticket_details }}
          @endif
        </div>

      </div>


    <div class="col-md-12">
        <hr><h4><b>Description</b></h4>
      <h5> {!! $event->description !!} </h5>
    </div>

    <div class="col-md-12">
      <hr><h4><b>Event Photos</b></h4>
      @foreach($event->event_images as $event_image)
      <div class="col-md-3 event_image">
        <img src="{{ asset('africapievents/'.$event_image->image_name)}}" class="img-responsive">
        {{$event_image->description}}
      </div>
      @endforeach
    </div>

    <div class="col-md-12">
      <hr>
      <h4>Register for Event</h4>
      <div class="col-md-8 col-md-offset-2">
        <form class="form-vertical" action="{{ route('eventsubscribe',['id'=>$event->id]) }}" method="post">
          {{ csrf_field() }}
          <label for="first_name">First Name:</label>
          <input class="form-control" type="text" name="first_name" value="" required>
          <label for="last_name">Last Name</label>
          <input class="form-control" type="text" name="last_name" value="" required>
          <label for="email">Email Address:</label>
          <input class="form-control" type="email" name="email" value="" placeholder="Your Email" required>
          <input type="checkbox" name="subscription" value="1">
          <label for="subscription">Check this to be added to publicTech mailing list.</label><br>

          By clicking the register button below, you accept the terms of service and agree to have read the <a href="#">privacy policy.</a><br>
          <button type="submit" class="btn btn-success" name="button">Register</button><br><br>

        </form>
      </div>

    </div>


  </div>
@endsection
