<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function gallery()
    {
        return view('admin.gallery.add');
    }

    public function galleryStore(Request $request)
    {
       $request->validate([
        'image'=>'required',
       ]);

       if($request->hasFile('image'))
       {
        $image = $request->file('image');
        $image_name = 'gallery-image-'.time().'.'.$image->getClientOriginalExtension();
        Image::make($image)->save(public_path('uploads/gallery/'.$image_name));
       }

        Gallery::insert([
            'image'=>$image_name,
            'created_at'=>Carbon::now(),
        ]);

        return back();
    }
}
