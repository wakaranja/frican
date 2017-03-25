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


      <form class="form-horizontal" action="{{ route('update_report',['id'=>$report->id]) }}" method="post" enctype="multipart/form-data">
        <legend>Edit Report</legend>
        {{ csrf_field() }}


        <input type="hidden" name="posted_by" value="{{$report->posted_by}}">
        <input type="hidden" name="leadreport" value="{{$report->leadreport}}">
        <input type="hidden" name="featured_image" value="1.jpg">

          <label for="title">Title </label>
          <input class="form-control input-lg" value="{{$report->title}}" type="text" name="title" required="" placeholder="Post Title" autofocus="" autocomplete="on">

          <label for="content">Excerpt: </label>
          <textarea class="form-control input-lg" value="" rows="15" wrap="hard" name="excerpt" required="" placeholder="Report Excerpt">{{$report->excerpt}}</textarea>

          <label for="published_status">Status: </label>
          <select name="published_status" value="{{$report->published_status}}" class="form-control">
            <option value="1" selected>Published</option>
            <option value="0">Draft</option>
          </select>

          <label for="comment_status">Category: </label>
          <select name="category" value="{{$report->category}}" class="form-control">
            <option value="1" selected>1</option>
            <option value="2">2</option>
          </select>

          <label>Selected Document: </label>{{$report->pdf_link}}<br>

          <label for="Upload_Pdf">New report pdf: </label>
          <input type="file" name="pdf_link" value="">
          <br>
          <button class="btn btn-primary btn-lg" type="submit">Update Post</button>
      </form>
      </div>
  </div>

@endsection
