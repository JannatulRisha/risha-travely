@extends('admin.admin_master')

@section('admin')
<div class="page-content">
  <div class="container-fluid">

    <div class="row">
      <div class="col-8">
        <div class="card">
          <div class="card-body">

            <h4 class="card-title">Change password</h4>
            <br>

            @if (count($errors))
            @foreach ($errors->all() as $error)
            <p class="alert alert-danger">{{ $error }}</p>
            @endforeach
            @endif

            <form action="{{ route('update.password') }}" method="POST">
              @csrf

              <div class="row mb-3">
                <label for="oldpassword" class="col-sm-3 col-form-label">Old Password</label>
                <div class="col-sm-9">
                  <input class="form-control" type="password" id="oldpassword" name="oldpassword">
                </div>
              </div>

              <div class="row mb-3">
                <label for="newpassword" class="col-sm-3 col-form-label">New Password</label>
                <div class="col-sm-9">
                  <input class="form-control" type="password" id="oldpassword" name="newpassword">
                </div>
              </div>

              <div class="row mb-3">
                <label for="confirmpassword" class="col-sm-3 col-form-label">Confirm Password</label>
                <div class="col-sm-9">
                  <input class="form-control" type="password" id="confirmpassword" name="confirm_password">
                </div>
              </div>

              <input class="btn btn-info" type="submit" value="Change password">

            </form>

            <!-- end row -->
          </div>
        </div>
      </div> <!-- end col -->
    </div>

  </div>
</div>

@endsection