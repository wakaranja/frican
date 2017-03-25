@extends('africapolicy.dashboard')
@section('content')


  <div class="col-md-12">
    <h1>Add Event</h1>

    <div class="col-md-8 col-md-offset-2">

      <form class="form-horizontal" action="{{ route('create_event') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <label for="name">Event Name: </label>
        <input class="form-control" type="text" name="name" value="">

        <label for="date">When?</label>
        <input class="form-control" type="date" name="date" value="">

        <label for="from">From what time?</label>
        <input class="form-control" type="datetime-local" name="from" value="">

        <label for="to">To what time?</label>
        <input class="form-control" type="datetime-local" name="to" value="">

        <label for="venue">Where?</label>
        <input class="form-control" type="text" name="venue" value="">

        <label for="location">Map Location:</label>
        <input class="form-control" type="text" name="location" value="">

        <label for="ticket">Ticket Price:</label>
        <input class="form-control" type="number" name="ticket" value="">

        <label for="ticket_details">Ticket Details:</label>
        <input class="form-control" type="text" name="ticket_details" value="">

        <label for="organizer">Organiser: </label>
        <input class="form-control" type="text" name="organizer" value="">

        <label for="image">Event Image:</label>
        <input class="form-control" type="file" name="image" value="">

        <label for="description">Event Description:</label>
        <textarea class="form-control" name="description" rows="8" cols="80">Event Description</textarea>
        <br>
        <button type="submit" class="btn btn-primary btn-lg">Save Event</button>
      </form>

    </div>
  </div>





@endsection
