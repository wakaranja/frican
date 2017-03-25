@extends('layouts.site')

@section('content')
<div class="container">
  <h1 class="africapi-centres-title">Centres</h1>
  <div class="col-md-8 col-md-offset-2">
    @foreach($centres as $centre)
    <div class="col-md-12 africapi-box">
      Centre: {{ $centre->name }}<br>
      About: {{ str_limit($centre->about, $limit = 50, $end = '...') }}<br>
      Director: {{ $centre->director }}<br>      
    </div>

    @endforeach
  </div>
</div>
@endsection
