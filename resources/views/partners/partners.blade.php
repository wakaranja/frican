@extends('layouts.app')
@section('content')
  <h1>Partners</h1>
      @foreach($partners as $partner)
        <div class="col-md-2">
          <div class="panel panel-default">
            <div class="panel-heading">
              {{ $partner->name }}
            </div>
            <div class="panel-body">
              <img src="{{ $partner->logolink }}" alt="" width=100% height=50 class="img-responsive">
            </div>
            <div class="panel-footer">
              {{ $partner->description }}
            </div>
          </div>

        </div>
      @endforeach
      <hr>
      <br>
      <h1>Networks</h1>
      @foreach($networks as $network)
      <div class="col-md-2">
        <div class="panel panel-default">
          <div class="panel-heading">
            {{ $network->name }}
          </div>
          <div class="panel-body">
            <img src="{{ $network->logolink }}" alt="" width=100% height=150 class="img-responsive">
          </div>
          <div class="panel-footer">
            {{ $network->description }}
          </div>
        </div>

      </div>

      @endforeach
@endsection
