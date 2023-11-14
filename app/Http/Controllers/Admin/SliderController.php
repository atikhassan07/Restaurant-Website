<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class SliderController extends Controller
{
   public function __construct()
   {
        $this->middleware('auth');
   }

   public function slider(){
    $sliders = Slider::all();
    return view('admin.slider.slider',compact('sliders'));
       return view('admin.slider.slider');
   }

   public function add()
   {
       return view('admin.slider.add');
   }

// Slider Insert Code
   public function store(Request $request)
   {
        $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'image' => 'required',
        ]);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $image_name = 'slider'.'-'.time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->save(public_path('uploads/sliders/'.$image_name));
        }

        Slider::insert([
            'title'=>$request->title,
            'sub_title'=>$request->sub_title,
            'image'=>$image_name,
        ]);

        return back();
   }
// Slider Edit Code

   public function edit($id)
   {
       $sliders = Slider::find($id);
       return view('admin.slider.edit',compact('sliders'));
   }

// Slider Update Code
   public function update(Request $request, $id){

         $sliders = Slider::find($id);

        if($request->hasFile('image') == null){
            Slider::find($id)->update([
                'title'=>$request->title,
                'sub_title'=>$request->sub_title,
            ]);

            return back();
        }else{

            $delete_image =public_path('uploads/sliders/'.$sliders->image);
            unlink($delete_image);

            if($request->hasFile('image')){
                $image = $request->file('image');
                $image_name = 'slider'.'-'.time().'.'.$image->getClientOriginalExtension();
                Image::make($image)->save(public_path('uploads/sliders/'.$image_name));
            }
            Slider::find($id)->update([
                'title'=>$request->title,
                'sub_title'=>$request->sub_title,
                'image'=>$image_name,
            ]);

            return back();
        }
   }

// delete with slider image
   public function delete($id)
   {
        $sliders = Slider::find($id);
        $delete_image =public_path('uploads/sliders/'.$sliders->image);
        unlink($delete_image);
        Slider::find($id)->delete();
        return back();
   }
}
