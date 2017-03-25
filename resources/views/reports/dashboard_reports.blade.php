@extends('africapolicy.dashboard')
@section('content')

<div class="container">
  <h1 class="africapi-reports-title">Reports</h1>
  <div class="col-md-12">


  <div class="col-md-12">
    {{ $reports->links() }}
  </div>

  
  <div class="col-md-10">
      <table class="table table-hover">
        <thead>
        <tr>
          <th>#</th>
          <th>Title</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach( $reports as $report )
          <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$report->title}}</td>            
            <td>
            @if($report->published_status == 1)
              <span class="label label-success">Published</span>
            @elseif($report->published_status == 1)
              <span class="label label-success">Warning</span>
            @elseif($report->published_status == 2)
              <span class="label label-default">Pending</span>
            @endif
            </td>
            <td><a href="{{ route('edit_report',['id'=>$report->id]) }}">Edit</a></td>
          </tr>
        @endforeach
        </tbody>
      </table>

  </div>
  
  <div class="col-md-12">
    {{ $reports->links() }}
  </div>


  </div>
</div>

@endsection
