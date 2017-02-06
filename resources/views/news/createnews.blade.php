@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="col-md-8 col-md-offset-2">
      <form class="form-horizontal" action="#" method="post">
        <label class="form-control input-lg" for="title">Title:</label>
        <input class="form-control input-lg" type="text" name="title" value="{{ old('title')}}">

        <label class="form-control input-lg" for="content"></label>
        <textarea class="form-control input-lg" name="content" rows="10"></textarea>

        <input class="form-control input-lg" type="hidden" name="posted_by" value="1">
        <input class="form-control input-lg" type="hidden" name="featured_image" value="1.jpg">

        <label class="form-control input-lg" for="comment_status">Category: </label>
        <select class="form-control input-lg" name="comment_status" value="" class="form-control">
          <option class="form-control input-lg" value="" selected>Enabled</option>
          <option class="form-control input-lg" value="0">Disabled</option>
        </select>

        <button class="btn btn-primary btn-lg" type="submit">Save Report</button>
      </form>



    </div>
  </div>

  @endsection
