@extends('layouts.admin')
@section('admin_content')
<div class="row">
    <div class="col-md-12 ">
        <form method="post" action="{{ route('special.category.store') }}">
            @csrf
            <div class="card mb-3">
              <div class="card-header">
                <div class="row">
                    <div class="col-md-8 card_title_part">
                        <i class="fab fa-gg-circle"></i>Add New Special Category
                    </div>
                    <div class="col-md-4 card_button_part">
                        <a href="{{ route('special.category') }}" class="btn btn-sm btn-dark"><i class="fas fa-th"></i>All Special Category</a>
                    </div>
                </div>
              </div>
              <div class="card-body">
                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label col_form_label">Special Category Name<span class="req_star">*</span>:</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control form_control" id="" name="special_category_name">
                      @error('special_category_name')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>
              </div>
              <div class="card-footer text-center">
                <button type="submit" class="btn btn-sm btn-dark">Add Special Category</button>
              </div>
            </div>
        </form>
    </div>
</div>
@endsection
