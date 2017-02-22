@extends('layouts.site')
@section('content')

<div class="container">
  <h1>Reports</h1>
  <div class="col-md-12">


  <div class="col-md-12">
    {{ $reports->links() }}
  </div>
  @foreach( $reports as $report )
  <div class="col-md-6">

      <div class="col-md-3">
        <img src="/img/300b300.jpg" alt="" width='250' height='250' class="img-responsive">
      </div>
    <div class="col-md-9">
      <a href="{{ route('report',['id'=>$report->id]) }}">{{ $report->title }}</a>
      <hr>
      {{ $report->excerpt }}
      <hr>
    </div>

  </div>
  @endforeach
  <div class="col-md-12">
    {{ $reports->links() }}
  </div>


  </div>
</div>

@endsection
