@extends('layouts.app')
@section('content')
      <h1>{{ $report->title }}</h1>
      <hr>
      {{ $report->excerpt }}
      <a href="#">View full report</a>  
@endsection
