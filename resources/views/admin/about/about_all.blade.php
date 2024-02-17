@extends('admin.admin_master')

@section('admin')
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<div class="page-content">
  <div class="container-fluid">

    <div class="row">
      <div class="col-8">
        <div class="card">
          <div class="card-body">

            <h4 class="card-title">About</h4>
            <br>

            <form action="{{ route('about.update') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="id" value="{{ $aboutData->id }}">
              <div class="row mb-3">
                <label for="title" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                  <input class="form-control" type="text" id="title" name="title" value="{{ $aboutData->title }}">
                </div>
              </div>

              <div class="row mb-3">
                <label for="short_text" class="col-sm-2 col-form-label">Short Text</label>
                <div class="col-sm-10">
                  <input class="form-control" type="text" id="short_text" name="short_text"
                    value="{{ $aboutData->short_text }}">
                </div>
              </div>

              <input class="btn btn-info" type="submit" value="Update About">

            </form>

            <!-- end row -->
          </div>
        </div>
      </div> <!-- end col -->
    </div>

  </div>
</div>

<script type="text/javascript">
  $(document).ready(function(){

    $('#image').change(function(e){

      var reader = new FileReader();

      reader.onload = function(e){

        $('#showImage').attr('src', e.target.result);

      };

      reader.readAsDataURL(e.target.files['0']);

    });

  });

</script>

@endsection