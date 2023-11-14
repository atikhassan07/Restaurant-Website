<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Specialpart;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class SpecialpartController extends Controller
{
   public function __construct()
   {
        $this->middleware('auth');
   }

   public function specialItems()
   {
       $special_items = Specialpart::all();
       return view('admin.special_items.special_item',[
        'special_items'=>$special_items,
       ]);
   }

   public function add()
   {
    return view('admin.special_items.add');
   }

   public function store(Request $request)
   {
        $request->validate([
            's_category_id'=>'required',
            'title'=>'required',
        ],[
            's_category_id.required'=>'The Specific category field is required',
        ]);
        $image_name = '';
        if($request->hasFile('image')){
            $image = $request->file('image');
            $image_name = 'Special_item'.'-'.uniqId().'.'.$image->getClientOriginalExtension();
            Image::make($image)->save(public_path('uploads/special_items/'.$image_name));
        }
            Specialpart::insert([
            's_category_id'=>$request->s_category_id,
            'title'=>$request->title,
            'details'=>$request->details,
            'image'=>$image_name,
            'created_at'=>Carbon::now(),
        ]);

        return redirect()->route('special.items')->with('success','Special Item Added Successfully');

   }

   public function edit($id)
   {
     $special_itemE = Specialpart::find($id);
     return view('admin.special_items.edit',[
       'special_itemE'=>$special_itemE,
     ]);
   }

   public function update(Request $request, $id)
   {
        if($request->hasFile('image') == null){
            Specialpart::find($id)->update([
                'title'=>$request->title,
                'details'=>$request->details,
                'updated_at'=>Carbon::now(),
            ]);
            return redirect()->route('special.items')->with('success','Special Item Updated Successfully');
        }else{
            $image_name = '';
            if($request->hasFile('image')){
                $image = $request->file('image');
                $image_name = 'Special_item'.'-'.uniqId().'.'.$image->getClientOriginalExtension();
                Image::make($image)->save(public_path('uploads/special_items/'.$image_name));
            }
            Specialpart::find($id)->update([
                'title'=>$request->title,
                'details'=>$request->details,
                'image'=>$image_name,
                'updated_at'=>Carbon::now(),
            ]);
            return redirect()->route('special.items')->with('success','Special Item Updated Successfully');
        }
   }
}
