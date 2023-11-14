@extends('layouts.admin')
@section('admin_content')
<div class="row">
    <div class="col-md-12">
        <div class="card mb-3">
          <div class="card-header">
            <div class="row">
                <div class="col-md-8 card_title_part">
                    <i class="fab fa-gg-circle"></i>All Slider Information
                </div>
                <div class="col-md-4 card_button_part">
                    <a href="{{ route('add.slider') }}" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i>Add Slider</a>
                </div>
            </div>
          </div>
          <div class="card-body">
            <table class="table table-bordered table-striped table-hover">
              <thead class="table-dark">
                <tr>
                  <th>Slider Title</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($sliders as $slider)
                <tr>
                    <td>{{ $slider->title }}</td>
                    <td>
                        <img width="150" src="{{ asset('uploads/sliders') }}/{{ $slider->image }}" alt="">
                    </td>
                    <td>
                        <a href="{{ route('edit.slider',$slider->id) }}" class="btn btn-success btn-xs"><i class="fas fa-edit"></i></a>
                        <a href="{{ route('delete.slider',$slider->id) }}" class="btn btn-danger btn-xs"><i class="fas fa-trash"></i></i></a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
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
