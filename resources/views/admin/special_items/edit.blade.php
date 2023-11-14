@extends('layouts.admin')
@section('admin_content')
<div class="col-md-12 ">
    <form method="post" action="{{ route('special.items.update',$special_itemE->id) }}" enctype="multipart/form-data">
        @csrf
        <div class="card mb-3">
          <div class="card-header">
            <div class="row">
                <div class="col-md-8 card_title_part">
                    <i class="fab fa-gg-circle"></i>Edit Special Item
                </div>
                <div class="col-md-4 card_button_part">
                    <a href="{{ route('special.items') }}" class="btn btn-sm btn-dark"><i class="fas fa-th"></i>All Slider</a>
                </div>
            </div>
          </div>
          <div class="card-body">
            <div class="row mb-3">
              <label class="col-sm-3 col-form-label col_form_label">Special Category Name<span class="req_star">*</span>:</label>
              <div class="col-sm-7">
                  <select name="s_category_id" id="" class="form-control">
                      <option value="" disabled selected>Choosse a Special Category</option>
                      @php
                          $special_category = App\Models\Specialcategory::all();
                      @endphp
                      @foreach ($special_category as $category)
                       <option value="{{ $category->id }}" @if($category->id == $special_itemE->s_category_id)selected @endif>{{ $category->special_category_name }}</option>
                      @endforeach
                  </select>

              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-3 col-form-label col_form_label">Special Item Name<span class="req_star">*</span>:</label>
              <div class="col-sm-7">
                <input type="text" class="form-control form_control" id="" name="title" value="{{ $special_itemE->title }}">
                @error('title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-3 col-form-label col_form_label">Special Item Details<span class="req_star">*</span>:</label>
              <div class="col-sm-7">
                <textarea type="text" class="form-control form_control" id="" name="details">{{ $special_itemE->details }}</textarea>

              </div>
            </div>

            <div class="row mb-3">
              <label class="col-sm-3 col-form-label col_form_label">Special Item Image<span class="req_star">*</span>:</label>
              <div class="col-sm-7">
                <input type="file" class="form-control form_control dropify" id="" name="image">

              </div>
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
