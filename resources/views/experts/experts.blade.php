@extends('layouts.site')
@section('content')
<div class="container">
  <h1>Our Experts</h1>
      @foreach($experts as $expert)

          <div class="col-md-3">
            <div class="panel panel-default expert_div">
              <div class="panel-heading expert_name">
                {{ $expert->name }}
              </div>
              <div class="panel-body">
                <img src="{{ asset('/img/expert_images/Anne.jpg') }}" alt="" class="img-responsive expert_images">
              </div>
              <div class="panel-footer">
                {{ str_limit($expert->bio, $limit = 100, $end = '...') }}
                <p>Website: <a href="{{ $expert->url}}">{{ $expert->name }}</a></p>
              </div>
          </div>

          </div>
      @endforeach
</div>

@endsection
