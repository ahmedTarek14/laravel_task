@extends("app")



@section("form")
<div class="row g-0">
    <div class="col-12 my-5 col-lg-6">
        <img class="img-responsive" src="zz.jpg">
    </div>
    <div class="col-12 col-lg-6 d-flex align-items-center">
        <form class="row g-5 needs-validation" novalidate action="{{route('posts.add')}}" method="POST">
            @csrf
            <div class="col-12">
                <label for="validationCustom01" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="validationCustom01" required>
                <div class="invalid-feedback">
                    Please provide a valid name.
                </div>
                <div class="valid-feedback">
                    Nice Name☺!
                </div>
            </div>
            
            <div class="col-12">
                <label for="validationCustom01" class="form-label">Post by</label>
                <input type="text" class="form-control" name="post_by" id="validationCustom01" required>
                <div class="invalid-feedback">
                    Please provide a valid Price.
                </div>
                <div class="valid-feedback">
                    Nice Price☺!
                </div>
            </div>

            <div class="col-12">
                <label for="validationCustom01" class="form-label">Date</label>
                <input type="date" class="form-control" name="date" id="validationCustom01" required>
                <div class="invalid-feedback">
                    Please provide a valid stock.
                </div>
                <div class="valid-feedback">
                    Nice stock☺!
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-danger" type="submit">submit</button>
            </div>
        </form>
    </div>
</div>
</div>
</div>
@endsection