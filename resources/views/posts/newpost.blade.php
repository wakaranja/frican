@extends('layouts.site')
@section('content')
  <div class="container">
    <div class="col-md-8 col-md-offset-2">


      <form class="form-horizontal" action="{{ route('create_post') }}" method="post">
        <legend>New Post</legend>
        {{ csrf_field() }}
        <input type="hidden" name="author" value="1">
        <input type="hidden" name="commentstatus" value="1">
        <input type="hidden" name="category" value="1">
        <input type="hidden" name="featured_image" value="1.jpg">

          <label for="title">Title </label>
          <input class="form-control input-lg" value="{{ old('title') }}" type="text" name="title" required="" placeholder="Post Title" autofocus="" autocomplete="on">
          <label>Excerpt </label>
          <textarea class="form-control input-lg" value="{{ old('excerpt') }}" rows="3" wrap="hard" name="excerpt" placeholder="Post Excerpt (A summary of the post)"></textarea>
          <label for="content">Content </label>
          <textarea class="form-control input-lg" value="{{ old('content') }}" rows="15" wrap="hard" name="content" required="" placeholder="Post Content"></textarea>
          <label for="status">Status: </label>
          <select name="status" value="1" class="form-control">
            <option value="1" selected>Published</option>
            <option value="0">Draft</option>
          </select>
          <label for="comment_status">Comments: </label>
          <select name="comment_status" value="1" class="form-control">
            <option value="1" selected>Enabled</option>
            <option value="0">Disabled</option>
          </select>
          <br>
          <button class="btn btn-primary btn-lg" type="submit">Save Post</button>
      </form>
      </div>
  </div>

@endsection
