@extends('layouts.admin')
@section('admin_content')

<div class="row">
    <div class="col-md-12 ">
        <form method="post" action="{{ route('store.slider') }}" enctype="multipart/form-data">
            @csrf
            <div class="card mb-3">
              <div class="card-header">
                <div class="row">
                    <div class="col-md-8 card_title_part">
                        <i class="fab fa-gg-circle"></i>Add New Slider
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
                      <input type="text" class="form-control form_control" id="" name="title">
                      @error('title')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label col_form_label">Slider Sub Title:</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control form_control" id="" name="sub_title">
                      @error('sub_title')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label col_form_label">Photo:</label>
                    <div class="col-sm-7">
                      <input type="file" class="form-control form_control dropify" id="" name="image">
                      @error('image')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>
              </div>
              <div class="card-footer text-center">
                <button type="submit" class="btn btn-sm btn-dark">Add Slider</button>
              </div>
            </div>
        </form>
    </div>
</div>
@endsection
@section('footer_script')
<script>
    $('.dropify').dropify();
</script>
@endsection
