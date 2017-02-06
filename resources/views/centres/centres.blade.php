@extends('layouts.app')
@section('content')
  <h1>Centres</h1>
  <div class="col-md-8 col-md-offset-2">
    @foreach($centres as $centre)
    <div class="col-md-6">
      Centre Name: {{ $centre->name }}<br>
      About: {{ $centre->about }}<br>
      Director: {{ $centre->director }}<br>
      <hr>
    </div>

    @endforeach
  </div>


@endsection
