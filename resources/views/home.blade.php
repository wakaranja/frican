@extends('layouts.site')

@section('content')
<div id="carousel-example-generic" class="carousel slide africapi-slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="/slides/au.jpg" alt="..." class="africapi-slide-image">
      <div class="carousel-caption africapi-caption">
        <h3>African Union</h3>
      </div>
    </div>
    <div class="item">
      <img src="/slides/alshabaab.jpg" alt="..." class="africapi-slide-image">
      <div class="carousel-caption africapi-caption">
        <h3>Alshabaab</h3>
      </div>
    </div>
    <div class="item">
      <img src="/slides/brexit.jpg" alt="..." class="africapi-slide-image">
      <div class="carousel-caption africapi-caption">
        <h3>brexit</h3>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="col-md-10 col-md-offset-1">
  <h1>Recent Reports & Publications</h1><hr>
    @foreach($leadreport as $leadreport)
      <div class="col-md-12 africapi-lead-report">
        <div class="col-md-4">
          <img src="/img/300b300.jpg" alt="" class="img-responsive" width="100%">
        </div>
        <div class="col-md-8">
          <a class="africapi-link africapi-title" href="#">{{ $leadreport->title }}</a>

          <p class="africapi-lead-excerpt">{{ $leadreport->excerpt }}{{ $leadreport->excerpt }}{{ $leadreport->excerpt }}
            {{ $leadreport->excerpt }}{{ $leadreport->excerpt }}{{ $leadreport->excerpt }}<p>

        </div>
      </div>
    @endforeach

  @foreach($latestreports as $latestreport)
  <div class="col-md-4">
    <div class="col-md-12">
      <a class="africapi-link africapi-title" href="#">{{ $latestreport->title }}</a>
    </div>
    <div class="col-md-12 africapi-report-image">
          <img src="/img/300b300.jpg" alt="" class="img-responsive" width="100%">
    </div>
    <div class="col-md-12">
          <p class="africapi-excerpt"> {{ $latestreport->excerpt }}</p>
    </div>
  </div>
  @endforeach
</div>

@endsection
