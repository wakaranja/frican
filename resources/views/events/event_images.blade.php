@extends('africapolicy.dashboard')
@section('content')


  <div class="col-md-12">
    <h1>Add Event Images</h1>

    <div class="col-md-8 col-md-offset-2">

      <form class="form-horizontal" action="{{ route('add_event_image') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        
        <input class="form-control" type="hidden" name="event_id" value="{{$event->id}}">        

        <label for="image">Event Image:</label>
        <input class="form-control" type="file" name="event_image" value="">

        <label for="image">Image Description:</label>
        <input class="form-control" type="text" name="description" value="">
        
        <br>
        <button type="submit" class="btn btn-primary btn-lg">Add Event Image</button>
      </form>

    </div>
  </div>





@endsection
