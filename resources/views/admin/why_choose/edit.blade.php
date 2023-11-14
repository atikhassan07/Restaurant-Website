@extends('layouts.admin')
@section('admin_content')
<div class="row">
    <div class="col-md-12 ">
        <form method="post" action="{{ route('why.info.update',$data->id) }}">
            @csrf
            <div class="card mb-3">
              <div class="card-header">
                <div class="row">
                    <div class="col-md-8 card_title_part">
                        <i class="fab fa-gg-circle"></i>Update Information
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
                      <input type="text" class="form-control form_control" id="" name="main_title" value="{{ $data->main_title }}">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label col_form_label">Main Sub Title<span class="req_star">*</span>:</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control form_control" id="" name="main_subtitle" value="{{ $data->main_subtitle }}">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label col_form_label">Number<span class="req_star">*</span>:</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control form_control" id="" name="number" value="{{ $data->number}}">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label col_form_label">Title<span class="req_star">*</span>:</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control form_control" id="" name="title" value="{{ $data->title}}">

                    </div>
                  </div>

                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label col_form_label">Sub Ttile<span class="req_star">*</span>:</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control form_control" id="" name="sub_title" value="{{ $data->sub_title}}">

                    </div>
                  </div>


              </div>
              <div class="card-footer text-center">
                <button type="submit" class="btn btn-sm btn-dark">Update Information</button>
              </div>
            </div>
        </form>
    </div>
</div>
@endsection
