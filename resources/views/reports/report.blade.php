@extends('layouts.site')
@section('content')
<div class="container">
  <h1>{{ $report->title }}</h1>
  <hr>
  {{ $report->excerpt }}
  <a href="#">View full report</a>
</div>

@endsection
