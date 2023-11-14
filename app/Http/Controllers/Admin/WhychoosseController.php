<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Whychoosse;
use Carbon\Carbon;
use Illuminate\Http\Request;

class WhychoosseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function whyInfo()
    {
        $data = Whychoosse::where('status',1)->get();
        return view('admin.why_choose.why_info',compact('data'));
    }

    public function add()
    {
        return view('admin.why_choose.add');
    }

    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'number' =>'required',
        //     'title' =>'required',
        //   'sub_title' =>'required',
        // ]);

       Whychoosse::insert([
        'main_title'=>$request->main_title,
        'main_subtitle'=>$request->main_subtitle,
        'title'=>$request->title,
        'number'=>$request->number,
        'sub_title'=>$request->sub_title,
        'created_at'=>Carbon::now(),
       ]);

       return redirect()->back()->with('success', 'Information Added Successfully');
    }

    public function edit($id)
    {
        $data = Whychoosse::find($id);
        return view('admin.why_choose.edit',compact('data'));
    }

    public function update(Request $request, $id)
    {

        Whychoosse::where('id',$id)->update([
          'main_title'=>$request->main_title,
          'main_subtitle'=>$request->main_subtitle,
          'title'=>$request->title,
          'number'=>$request->number,
        ]);

        return redirect()->back()->with('success', 'Information Updated Successfully');
    }

    public function delete($id)
    {
        Whychoosse::where('id',$id)->update([
          'status'=>0,
        ]);

        return redirect()->back()->with('success', 'Information Deleted Successfully');
    }

}
