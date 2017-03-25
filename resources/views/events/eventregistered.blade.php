@extends('gaitara.dashboard')
@section('content')
  <div class="col-md-12">
    <h1>People registered for {{ $eventregistered->name }} ({{ (count($eventregistered->eventsubscribers)) }})</h1><hr>
    <div class="col-md-11">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Date Registered</th>
          </tr>
        </thead>
        <tbody>
          @foreach($eventregistered->eventsubscribers as $subscriber)
          <tr>
            <td>{{ $loop->index+1}}. </td>
            <td> {{ $subscriber->first_name }} {{ $subscriber->last_name }} </td>
            <td> {{ $subscriber->email }}</td>
            <td> {{ $subscriber->created_at }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

@endsection
