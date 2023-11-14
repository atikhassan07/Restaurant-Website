<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Specialcategory;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SpecialcategoryController extends Controller
{
   public function __construct()
   {
        $this->middleware('auth');
   }

   public function specialCategory()
   {
        $special_category = Specialcategory::all();
        return view('admin.special_category.special_category',[
            'special_category' => $special_category,
        ]);
   }
   public function add()
   {
     return view('admin.special_category.add');
   }

   public function store(Request $request)
   {
      $request->validate([
        'special_category_name'=>'required',
      ]);

        $slug = 'special_category'.'-'.uniqId();

        Specialcategory::insert([
            'special_category_name'=> $request->special_category_name,
            'slug' => $slug,
            'created_at'=>Carbon::now(),
        ]);

        return redirect()->route('special.category')->with('success','Special Category Added Successfully');
   }
}
