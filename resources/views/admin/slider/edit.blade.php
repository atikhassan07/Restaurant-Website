@extends('layouts.admin')
@section('admin_content')
<div class="col-md-12 ">
    <form method="post" action="{{ route('update.slider',$sliders->id) }}" enctype="multipart/form-data">
        @csrf
        <div class="card mb-3">
          <div class="card-header">
            <div class="row">
                <div class="col-md-8 card_title_part">
                    <i class="fab fa-gg-circle"></i>Edit Slider
                </div>
                <div class="col-md-4 card_button_part">
                    <a href="{{ route('slider') }}" class="btn btn-sm btn-dark"><i class="fas fa-th"></i>All Slider</a>
                </div>
            </div>
          </div>
          <div class="card-body">
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label col_form_label">Slider Title<span class="req_star">*</span>:</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control form_control" id="" name="title" value="{{ $sliders->title }}">
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label col_form_label">Slider Sub Title:</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control form_control" id="" name="sub_title" value="{{ $sliders->sub_title }}">
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-3 col-form-label col_form_label">Photo:</label>
                <div class="col-sm-7">
                  <input type="file" class="form-control form_control dropify" id="" name="image" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                </div>
              </div>
              <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <img width="200" src="{{ asset('uploads/sliders') }}/{{ $sliders->image }}" alt="" id="blah">
                    </div>
                </div>
                <div class="col-lg-3"></div>

              </div>
          </div>
          <div class="card-footer text-center">
            <button type="submit" class="btn btn-sm btn-dark">Update Slider</button>
          </div>
        </div>
    </form>
</div>
@endsection
@section('footer_script')
<script>
    $('.dropify').dropify();
</script>
@endsection
