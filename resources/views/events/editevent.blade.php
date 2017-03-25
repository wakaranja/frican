@extends('layouts.site')
@section('content')

<div class="container">
  <div class="col-md-12">
    <h1>Edit Event</h1>

    <div class="col-md-8 col-md-offset-2">

      <form class="form-horizontal" action="{{ route('update_event',['id'=>$event->id]) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <label for="name">Event Name: </label>
        <input class="form-control" type="text" name="name" value="{{ $event->name }}">

        <label for="date">When?</label>
        <input class="form-control" type="date" name="date" value="{{ $event->date }}">

        <label for="from">From what time?</label>
        <input class="form-control" type="date" name="from" value="{{ $event->from }}">

        <label for="to">To what time?</label>
        <input class="form-control" type="date" name="to" value="{{ $event->to }}">

        <label for="venue">Where?</label>
        <input class="form-control" type="text" name="venue" value="{{ $event->venue }}">

        <label for="location">Map Location:</label>
        <input class="form-control" type="text" name="location" value="{{ $event->location }}">

        <label for="ticket">Ticket Price:</label>
        <input class="form-control" type="number" name="ticket" value="{{ $event->ticket }}">

        <label for="ticket_details">Ticket Details:</label>
        <input class="form-control" type="text" name="ticket_details" value="{{ $event->ticket_details }}">

        <label for="organizer">Organiser: </label>
        <input class="form-control" type="text" name="organizer" value="{{ $event->organizer }}">

        <label for="image">Event Image:</label>
        <input class="form-control" type="file" name="image" value="">

        <img src="{{ asset('myevents/'.$event->image) }}" width="150" height="150"><br>

        <label for="description">Event Description:</label>
        <textarea class="form-control" name="description" rows="8" cols="80">{{ $event->description }}</textarea>
        <br>
        <button type="submit" class="btn btn-primary btn-lg">Update Event</button>
      </form>

    </div>
  </div>

</div>



@endsection
