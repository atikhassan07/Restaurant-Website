@extends('layouts.admin')
@section('admin_content')
<div class="row">
    <div class="col-md-12">
        <div class="card mb-3">
          <div class="card-header">
            <div class="row">
                <div class="col-md-8 card_title_part">
                    <i class="fab fa-gg-circle"></i>All Information
                </div>
                <div class="col-md-4 card_button_part">
                    <a href="{{ route('why.info.add') }}" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i>Add Information</a>
                </div>
            </div>
          </div>
          <div class="card-body">
            <table class="table table-bordered table-striped table-hover">
              <thead class="">
                <tr>
                  <th>SL NO:</th>
                  <th>Ttile</th>
                  <th>Sub Title</th>
                  <th>Main Title</th>
                  <th>Main Sub Title</th>
                  <th>Created Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $key=>$data)
                <tr>
                    <td>{{ $key+1 }}</td>
                     <td>{{ $data->title }}</td>
                    <td>{{ $data->sub_title }}</td>
                    <td>{{ $data->main_title }}</td>
                    <td>{{ $data->main_subtitle }}</td>
                    <td>{{ $data->created_at->diffForhumans() }}</td>
                    <td>
                        <a href="{{ route('why.info.edit',$data->id) }}" class="btn btn-success btn-xs"><i class="fas fa-edit"></i></a>

                        <a href="{{ route('why.info.delete',$data->id) }}" class="btn btn-danger btn-xs"><i class="fas fa-trash"></i></i></a>
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
