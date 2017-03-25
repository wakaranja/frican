@extends('africapolicy.dashboard')
@section('content')
<script type="text/javascript" src="{{ asset('/js/tinymce/tinymce.min.js') }}"></script>
<script type="text/javascript">
  tinymce.init({
    selector : "textarea",
    plugins : ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste"],
    toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
  });
</script>

  <div class="container">
    <div class="col-md-8 col-md-offset-2">


      <form class="form-horizontal" action="{{ route('create_report') }}" method="post" novalidate enctype="multipart/form-data">
        <legend>New Report</legend>
        {{ csrf_field() }}


        <input type="hidden" name="posted_by" value="1">
        <input type="hidden" name="leadreport" value="0">
        

          <label for="title">Title </label>
          <input class="form-control input-lg" value="{{ old('title') }}" type="text" name="title" required="" placeholder="Post Title" autofocus="" autocomplete="on">

          <label for="content">Excerpt: </label>
          <textarea class="form-control input-lg" value="{{ old('excerpt') }}" rows="15" wrap="hard" name="excerpt" required="" placeholder="Report Excerpt"></textarea>

          <label for="featured_image">Select Report Image: </label>
          <input type="file" name="featured_image" value="">

          <label for="published_status">Status: </label>
          <select name="published_status" value="1" class="form-control">
            <option value="1" selected>Published</option>
            <option value="0">Draft</option>
          </select>

          <label for="comment_status">Category: </label>
          <select name="category" value="" class="form-control">
            <option value="1" selected>1</option>
            <option value="2">2</option>
          </select>

          <label for="Upload_Pdf">Select report pdf: </label>
          <input type="file" name="pdf_link" value="1.jpg">
          <br>
          <button class="btn btn-primary btn-lg" type="submit">Save Post</button>
      </form>
      </div>
  </div>

@endsection
