@extends('admin.admin_master')

@section('admin')
<div class="page-content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6">
        <div class="card">

        @php

        $id        = Auth::user()->id;
        $adminData = App\Models\User::find($id);

        @endphp
          <br><br>
          <center> <img class="card-img-top img-fluid rounded-circle avatar-xl"
              src="{{ (!empty($adminData->profile_image)) ? url('upload/admin_images/'. $adminData->profile_image): url('upload/no_image.jpg') }}" alt="Card image cap"></center>
          <div class="card-body">
            <h4 class="card-title">Name: {{ $adminData->name }}</h4>
            <h4 class="card-title">Name: {{ $adminData->email }}</h4>
            <h4 class="card-title">Name: {{ $adminData->username }}</h4>
            <br>
            <a class="btn btn-sm btn-primary" href="{{ route('edit.profile') }}">Edit Profile</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

@endsection