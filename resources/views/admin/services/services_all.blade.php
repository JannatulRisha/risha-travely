@extends('admin.admin_master')

@section('admin')
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<div class="page-content">
  <div class="container-fluid">

    <div class="row">
      <div class="col-8">
        <div class="card">
          <div class="card-body">

            <h4 class="card-title">All services</h4>
            <br>

            <input type="hidden" name="id" value="{{ $serviceData->id }}">
            <div class="row mb-3">
              <label for="title" class="col-sm-2 col-form-label">Title</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" id="title" name="title" value="{{ $serviceData->title }}">
              </div>
            </div>

            <div class="row mb-3">
              <label for="short_text" class="col-sm-2 col-form-label">Short Text</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" id="short_text" name="short_text"
                  value="{{ $serviceData->short_text }}">
              </div>
            </div>

            <div class="row mb-3">
              <label for="text_one" class="col-sm-2 col-form-label">Text One</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" id="text_one" name="text_one"
                  value="{{ $serviceData->text_one }}">
              </div>
            </div>

            <div class="row mb-3">
              <label for="text_two" class="col-sm-2 col-form-label">Text Two</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" id="text_two" name="text_two"
                  value="{{ $serviceData->text_two }}">
              </div>
            </div>

            <div class="row mb-3">
              <label for="text_three" class="col-sm-2 col-form-label">Text Three</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" id="text_three" name="text_three"
                  value="{{ $serviceData->text_three }}">
              </div>
            </div>

            <div class="row mb-3">
              <label for="text_four" class="col-sm-2 col-form-label">Text Four</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" id="text_four" name="text_four"
                  value="{{ $serviceData->text_four }}">
              </div>
            </div>

            <div class="row mb-3">
              <label for="showImage" class="col-sm-2 col-form-label"></label>
              <div class="col-sm-10">
                <img class="card-img-top img-fluid rounded avatar-lg"
                  src="{{ (!empty($serviceData->service_photo)) ? url($serviceData->service_photo): url('/upload/no_image.jpg') }}"
                  id="showImage" alt="Card image cap">
              </div>
            </div>

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