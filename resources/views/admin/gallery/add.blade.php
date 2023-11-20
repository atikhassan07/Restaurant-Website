@extends('layouts.admin')
@section('admin_content')
<div class="row">
    <div class="col-md-12 ">
        <form method="post" action="{{ route('store.gallery') }}" enctype="multipart/form-data">
            @csrf
            <div class="card mb-3">
              <div class="card-header">
                <div class="row">
                    <div class="col-md-8 card_title_part">
                        <i class="fab fa-gg-circle"></i>Add New Gallery Image
                    </div>
                    {{-- <div class="col-md-4 card_button_part">
                        <a href="{{ route('menu') }}" class="btn btn-sm btn-dark"><i class="fas fa-th"></i>All</a>
                    </div> --}}
                </div>
              </div>
              <div class="card-body">
                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label col_form_label">Upload Gallery Photo<span class="req_star">*</span>:</label>
                    <div class="col-sm-7">
                      <input type="file" class="form-control form_control" id="" name="image">
                      @error('image')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>
              </div>
              <div class="card-footer text-center">
                <button type="submit" class="btn btn-sm btn-dark">Add Gallery Image</button>
              </div>
            </div>
        </form>
    </div>
</div>
@endsection
