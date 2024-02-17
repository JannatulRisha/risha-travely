@extends('admin.admin_master')

@section('admin')
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<div class="page-content">
  <div class="container-fluid">

    <!-- start page title -->
    <div class="row">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
          <h4 class="mb-sm-0">Contact Message All</h4>
        </div>
      </div>
    </div>
    <!-- end page title -->

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">

            <h4 class="card-title">All Bookings</h4>

            <table id="datatable" class="table table-bordered dt-responsive nowrap"
              style="border-collapse: collapse; border-spacing: 0; width: 100%;">
              <thead>
                <tr>
                  <th>Sl</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Message</th>
                  <th>Phone</th>
                  <th>Date</th>
                  <th>Action</th>

              </thead>


              <tbody>

                @foreach($bookings as $key=> $item)
                <tr>
                  <td> {{ $key+1}} </td>
                  <td> {{ $item->name }} </td>
                  <td> {{ $item->email }} </td>
                  <td> {{ $item->message }} </td>
                  <td> {{ $item->phone }} </td>
                  <td> {{ Carbon\Carbon::now() }} </td>

                  <td>

                    <a href="{{ route('edit.booking',$item->id) }}" class="btn btn-info sm" title="Edit Data">
                      <i class="fas fa-edit"></i> </a>

                    <a href="{{ route('booking.delete',$item->id) }}" class="btn btn-danger sm" title="Delete Data"
                      id="delete"> <i class="fas fa-trash-alt"></i> </a>

                  </td>

                </tr>
                @endforeach

              </tbody>
            </table>

          </div>
        </div>
      </div> <!-- end col -->
    </div> <!-- end row -->

    @endsection