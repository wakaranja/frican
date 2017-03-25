@extends('layouts.site')
@section('content')
<div class="container">
	<div class="col-md-8 col-md-offset-2">
	
		<h1 class="africapi-report-title">{{ $report->title }}</h1>
  		<hr>
  		<h4 class="africapi-paragraph">{!! $report->excerpt !!}</h4>
  		<a href="#">View full report</a>
  		

  		<embed src="{{ asset('/africapireports/'.$report->pdf_link) }}" style="width:100%; height:700px;" frameborder="0"></embed>
	</div>

</div>

@endsection
