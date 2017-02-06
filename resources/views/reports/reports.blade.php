@extends('layouts.app')
@section('content')
    <h1>Reports</h1>
    {{ $reports->links() }}
    @foreach( $reports as $report )
    <div class="col-md-6">

        <div class="col-md-3">
          <img src="/img/300b300.jpg" alt="" width='250' height='250' class="img-responsive">
        </div>
      <div class="col-md-9">
        <a href="#">{{ $report->title }}</a>
        <hr>
        {{ $report->excerpt }}
        <hr>
      </div>

    </div>
    @endforeach
    {{ $reports->links() }}
@endsection
