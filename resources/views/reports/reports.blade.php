@extends('layouts.site')
@section('content')

<div class="container">
  <h1 class="africapi-reports-title">Reports</h1>
  <div class="col-md-12">


  <div class="col-md-12">
    {{ $reports->links() }}
  </div>
  @foreach( $reports as $report )
  <div class="col-md-10 col-md-offset-1">

      <div class="col-md-3">
        <img src="{{ asset('/africapireports/'.$report->featured_image)}}" alt="" width='250' height='250' class="img-responsive">
      </div>
    <div class="col-md-9 report-box">
      <h4 class="africapi-reports-title"><a href="{{ route('report',['id'=>$report->id]) }}" >{{ $report->title  }}</a></h4>
      <hr class="reports-hr">
      <p class="report-excerpt">{!! str_limit($report->excerpt, $limit = 100, $end = '...') !!}</p>
      <br><br><br><br>
    </div>

  </div>
  @endforeach
  <div class="col-md-12">
    {{ $reports->links() }}
  </div>


  </div>
</div>

@endsection
