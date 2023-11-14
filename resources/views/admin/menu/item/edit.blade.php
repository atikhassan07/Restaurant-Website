@extends('layouts.admin')
@section('admin_content')
<div class="row">
    <div class="col-md-12 ">
        <form method="post" action="{{ route('update.item',$Edititems->id) }}">
            @csrf
            <div class="card mb-3">
              <div class="card-header">
                <div class="row">
                    <div class="col-md-8 card_title_part">
                        <i class="fab fa-gg-circle"></i>Edit Item
                    </div>
                    <div class="col-md-4 card_button_part">
                        <a href="{{ route('item') }}" class="btn btn-sm btn-dark"><i class="fas fa-th"></i>All Items</a>
                    </div>
                </div>
              </div>
              <div class="card-body">
                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label col_form_label">Menu Name<span class="req_star">*</span>:</label>
                    <div class="col-sm-7">
                        <select name="menu_id" id="" class="form-control">
                            <option value="" disabled selected>Choosse a Menu</option>
                            @php
                                $menus = App\Models\Menu::all();
                            @endphp
                            @foreach ($menus as $menu)
                             <option value="{{ $menu->id }}" @if($menu->id == $Edititems->menu_id)selected @endif>{{ $menu->menu_name }}</option>
                            @endforeach
                        </select>

                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label col_form_label">Item Name<span class="req_star">*</span>:</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control form_control" id="" name="item_name" value="{{ $Edititems->item_name }}">

                    </div>
                  </div>

                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label col_form_label">Item Sub Title<span class="req_star">*</span>:</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control form_control" id="" name="sub_title" value="{{ $Edititems->sub_title }}">

                    </div>
                  </div>

                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label col_form_label">Item Price<span class="req_star">*</span>:</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control form_control" id="" name="item_price" value="{{ $Edititems->item_price }}">

                    </div>
                  </div>

                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label col_form_label">Item Details<span class="req_star">*</span>:</label>
                    <div class="col-sm-7">
                      <textarea type="text" class="form-control form_control" id="" name="item_details">{{ $Edititems->item_details }}</textarea>
                    </div>
                  </div>


              </div>
              <div class="card-footer text-center">
                <button type="submit" class="btn btn-sm btn-dark">Update Items</button>
              </div>
            </div>
        </form>
    </div>
</div>
@endsection
