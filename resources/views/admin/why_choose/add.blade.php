@extends('layouts.admin')
@section('admin_content')
<div class="row">
    <div class="col-md-12 ">
        <form method="post" action="{{ route('why.info.store') }}">
            @csrf
            <div class="card mb-3">
              <div class="card-header">
                <div class="row">
                    <div class="col-md-8 card_title_part">
                        <i class="fab fa-gg-circle"></i>Store New Information
                    </div>
                    <div class="col-md-4 card_button_part">
                        <a href="{{ route('why.info') }}" class="btn btn-sm btn-dark"><i class="fas fa-th"></i>All Information</a>
                    </div>
                </div>
              </div>
              <div class="card-body">
                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label col_form_label">Main Title<span class="req_star">*</span>:</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control form_control" id="" name="main_title" value="{{ old('item_name') }}">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label col_form_label">Main Sub Title<span class="req_star">*</span>:</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control form_control" id="" name="main_subtitle" value="{{ old('sub_title') }}">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label col_form_label">Number<span class="req_star">*</span>:</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control form_control" id="" name="number" value="{{ old('number') }}">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label col_form_label">Title<span class="req_star">*</span>:</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control form_control" id="" name="title" value="{{ old('title') }}">
                      @error('title')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label col_form_label">Sub Ttile<span class="req_star">*</span>:</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control form_control" id="" name="sub_title" value="{{ old('sub_title') }}">
                      @error('sub_title')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>


              </div>
              <div class="card-footer text-center">
                <button type="submit" class="btn btn-sm btn-dark">Add Information</button>
              </div>
            </div>
        </form>
    </div>
</div>
@endsection
