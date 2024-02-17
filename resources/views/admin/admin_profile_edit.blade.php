@extends('admin.admin_master')

@section('admin')
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<div class="page-content">
  <div class="container-fluid">

    <div class="row">
      <div class="col-8">
        <div class="card">
          <div class="card-body">

            <h4 class="card-title">Edit Profile</h4>
            <br>

            <form action="{{ route('store.profile') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="row mb-3">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                  <input class="form-control" type="text" id="name" name="name" value="{{ $editData->name }}">
                </div>
              </div>

              <div class="row mb-3">
                <label for="username" class="col-sm-2 col-form-label">username</label>
                <div class="col-sm-10">
                  <input class="form-control" type="text" id="username" name="username"
                    value="{{ $editData->username }}">
                </div>
              </div>

              <div class="row mb-3">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input class="form-control" type="text" id="email" name="email" value="{{ $editData->email }}">
                </div>
              </div>

              {{-- <div class="row mb-3">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                  <input class="form-control" type="password" id="password" name="password">
                </div>
              </div> --}}

              <div class="row mb-3">
                <label for="image" class="col-sm-2 col-form-label">Profile image</label>
                <div class="col-sm-10">
                  <input class="form-control" type="file" id="image" name="profile_image">
                </div>
              </div>

              <div class="row mb-3">
                <label for="showImage" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                  <img class="card-img-top img-fluid rounded avatar-lg"
                    src="{{ (!empty($editData->profile_image)) ? url('upload/admin_images/'. $editData->profile_image): url('upload/no_image.jpg') }}"
                    id="showImage" alt="Card image cap">
                </div>
              </div>

              <input class="btn btn-info" type="submit" value="Update profile">

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