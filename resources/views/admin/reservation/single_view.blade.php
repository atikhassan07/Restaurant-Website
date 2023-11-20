@extends('layouts.admin')
@section('admin_content')
<div class="row">
    <div class="col-md-12">
        <div class="card mb-3">
          <div class="card-header">
            <div class="row">
                <div class="col-md-8 card_title_part">
                    <i class="fab fa-gg-circle"></i><span class="text-info">{{ $reservations->name }}</span>  Full Information
                </div>
                <div class="col-md-4 card_button_part">
                    <a href="{{ url('dashboard') }}" class="btn btn-sm btn-dark"><i class="fas fa-th"></i>All Customer Reservation</a>
                </div>
            </div>
          </div>
          <div class="card-body">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <table class="table table-bordered table-striped table-hover custom_view_table">
                      <tbody><tr>
                        <td>Customer Name</td>
                        <td>:</td>
                        <td>{{ $reservations->name }}</td>
                      </tr>
                      <tr>
                        <td>Customer Phone</td>
                        <td>:</td>
                        <td>{{ $reservations->phone }}</td>
                      </tr>
                      <tr>
                        <td>Customer Email</td>
                        <td>:</td>
                        <td>{{ $reservations->email }}</td>
                      </tr>
                      <tr>
                        <td>How Many People</td>
                        <td>:</td>
                        <td>{{ $reservations->people }} People</td>
                      </tr>
                      <tr>
                        <td>Date</td>
                        <td>:</td>
                        <td>{{ $reservations->date }}</td>
                      </tr>
                      <tr>
                        <td>Time</td>
                        <td>:</td>
                        <td>{{ $reservations->time }}</td>
                      </tr>
                      <tr>
                        <td>Message</td>
                        <td>:</td>
                        <td>{{ $reservations->message }}</td>
                      </tr>
                    </tbody></table>
                </div>
                <div class="col-md-2"></div>
            </div>
          </div>
          <div class="card-footer">
            <div class="btn-group" role="group" aria-label="Button group">
              <button type="button" class="btn btn-sm btn-dark">Print</button>
              <button type="button" class="btn btn-sm btn-secondary">PDF</button>
              <button type="button" class="btn btn-sm btn-dark">Excel</button>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection
