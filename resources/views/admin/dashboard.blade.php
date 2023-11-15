@extends('layouts.admin')
@section('admin_content')
<div class="row">
    <div class="col-md-12">
        <div class="card mb-3">
          <div class="card-header">
            <div class="row">
                <div class="col-md-8 card_title_part">
                    <i class="fab fa-gg-circle"></i>All Menu Information
                </div>
                <div class="col-md-4 card_button_part">
                    <a href="{{ route('add.menu') }}" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i>Add Menu</a>
                </div>
            </div>
          </div>
          <div class="card-body">
            <table class="table table-bordered table-striped table-hover">
              <thead class="">
                <tr>
                  <th>SL NO:</th>
                  <th>Menu Name</th>
                  <th>Created Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                {{-- @foreach ($menus as $key=>$menu)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $menu->menu_name }}</td>
                    <td>{{ $menu->created_at->diffForhumans() }}</td>
                    <td>
                        <a href="{{ route('edit.menu',$menu->id) }}" class="btn btn-success btn-xs"><i class="fas fa-edit"></i></a>
                        <a href="{{ route('delete.menu',$menu->id) }}" class="btn btn-danger btn-xs"><i class="fas fa-trash"></i></i></a>
                    </td>
                  </tr>
                @endforeach --}}
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
