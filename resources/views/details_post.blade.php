@extends("app")

@section("table")
<div class="card mt-5 mb-5">
    <div class="card-header">
      Post Info
    </div>
    <div class="card-body">
      <h5 class="card-title">Title</h5>
      <p class="card-text">{{$rows->title}}</p>
    </div>
  </div>

  <div class="card mt-5 mb-5">
    <div class="card-header">
      Post Creator Info
    </div>
    <div class="card-body">
      <h5 class="card-title">Name</h5>
      <p class="card-text">{{$rows->post_by}}</p>
      <h5 class="card-title">Date Created</h5>
      <p class="card-text">{{$rows->date}}</p>
    </div>
  </div>
@endsection

