@extends('admin.admin_master')

@section('admin')
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<div class="page-content">
  <div class="container-fluid">

    <div class="row">
      <div class="col-8">
        <div class="card">
          <div class="card-body">

            <h4 class="card-title">Add Multi Image</h4>
            <br>

            <form action="{{ route('portfolio.storemulti') }}" method="POST" enctype="multipart/form-data">
              @csrf

              <div class="row mb-3">
                <label for="image" class="col-sm-2 col-form-label">Add Multi Image</label>
                <div class="col-sm-10">
                  <input class="form-control" type="file" id="image" name="portfolio_multi_image[]" value="" multiple>
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-sm-10">

                <img src="{{ url('upload/no_image.jpg') }}">

                </div>
              </div>

              <input class="btn btn-info" type="submit" value="Add Multi Image">

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