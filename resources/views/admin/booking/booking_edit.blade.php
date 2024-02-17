@extends('admin.admin_master')

@section('admin')
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<div class="page-content">
  <div class="container-fluid">

    <div class="row">
      <div class="col-8">
        <div class="card">
          <div class="card-body">

            <h4 class="card-title">Edit Booking</h4>
            <br>

            <form action="{{ route('booking.update') }}" method="POST">
              @csrf
              <input type="hidden" name="id" value="{{ $bookings->id }}">
              <div class="row mb-3">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                  <input class="form-control" type="text" id="name" name="name" value="{{ $bookings->name }}">
                </div>
              </div>

              <div class="row mb-3">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input class="form-control" type="email" id="name" name="name" value="{{ $bookings->email }}">
                </div>
              </div>

              <div class="row mb-3">
                <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                <div class="col-sm-10">
                  <input class="form-control" type="text" id="phone" name="phone" value="{{ $bookings->phone }}">
                </div>
              </div>

              <div class="row mb-3">
                <label for="message" class="col-sm-2 col-form-label">Message</label>
                <div class="col-sm-10">
                  <input class="form-control" type="text" id="message" name="message" value="{{ $bookings->message }}">
                </div>
              </div>

              <input class="btn btn-info" type="submit" value="Update Booking">

            </form>

            <!-- end row -->
          </div>
        </div>
      </div> <!-- end col -->
    </div>

  </div>
</div>


@endsection