@extends('africapolicy.dashboard')
@section('content')


  <div class="col-md-12">
    <h1>Events</h1>
    <a href="{{ url('/newevent') }}"><button class="btn-primary btn-lg pull-right" name="button">New Event</button></a>
    <hr>
    <div class="col-md-12">
      {{ $events->links() }}
    </div>

    <div class="col-md-10 col-md-offset-1">
      <h3>All Events</h3>
      <table class="table table-hover">
    <thead>
      <tr>
        <th>#</th>
        <th>Event</th>
        <th>Date</th>
        <th>Venue</th>
        <th>Organiser</th>
        <th>Created By</th>
        <th>Add Images</th>
        <th>Manage</th>
      </tr>
    </thead>
    <tbody>
      @foreach($events as $event )
      <tr>
        <td>{{ $loop->index+1 }}</td>
        <td><a href="{{ route('event',['id'=>$event->id]) }}">{{ $event->name }}</a></td>
        <td>{{ $event->date }}</td>
        <td>{{ $event->venue }}</td>
        <td>{{ $event->organizer }}</td>
        <td>{{ $event->created_by }}</td>
        <td><a href="{{ route('get_event_image',['id'=>$event->id]) }}"><span class="glyphicon glyphicon-plus" aria-hidden="true"> </span> Add Images</a></td>
        <td>
          <a href="{{ route('edit_event',['id'=>$event->id]) }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"> </span></a>
          <a href="{{ route('delete_event',['id'=>$event->id]) }}" onclick="return confirm('Are you sure you want to delete this event?');"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
    </div>


<div class="col-md-12">
  {{ $events->links() }}
</div>

</div>

@endsection
