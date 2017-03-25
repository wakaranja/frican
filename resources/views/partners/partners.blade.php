@extends('layouts.site')
@section('content')
<div class="container">
  <h1>Partners</h1>
      @foreach($partners as $partner)

          <div class="col-md-3">
            <div class="panel panel-default">
              <div class="panel-heading">
                {{ $partner->name }}

              </div>
              <div class="panel-body">
                <img src="{{ $partner->logolink }}" alt="" width=100% height=50 class="img-responsive">
              </div>
              <div class="panel-footer">
                {{ str_limit($partner->description, $limit = 100, $end = '...') }}
                <p>Website: <a href="{{ $partner->url}}">{{ $partner->name }}</a></p>
              </div>
          </div>

          </div>
      @endforeach
      </div>


      <div class="container">
        <h1>Networks</h1>
        @foreach($networks as $network)
        <div class="col-md-3">
          <div class="panel panel-default">
            <div class="panel-heading">
              {{ $network->name }}
            </div>
            <div class="panel-body">
              <img src="{{ $network->logolink }}" alt="" width=100% height=150 class="img-responsive">
            </div>
            <div class="panel-footer">
              {{ $network->description }}
              <p>Website: <a href="{{ $network->url}}">{{ $network->name }}</a></p>
            </div>
          </div>

        </div>

        @endforeach
      </div>

@endsection
