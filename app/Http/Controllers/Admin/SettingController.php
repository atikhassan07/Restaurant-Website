<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contactinfo;
use App\Models\Logo;
use App\Models\Social;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function contactInfo()
    {
        $contactInfo = Contactinfo::where('id',1)->first();
        return view('admin.contact_info.contact',compact('contactInfo'));
    }

    public function update(Request $request)
    {

        $update = Contactinfo::where('id',1)->update([
            'phone1'=>$request->phone1,
            'phone2'=>$request->phone2,
            'phone3'=>$request->phone3,
            'phone4'=>$request->phone4,
            'email1'=>$request->email1,
            'email2'=>$request->email2,
            'email3'=>$request->email3,
            'email4'=>$request->email4,
            'address1'=>$request->address1,
            'address2'=>$request->address2,
            'address3'=>$request->address3,
            'address4'=>$request->address4,
            'updated_at'=>Carbon::now()->toDateTimeString(),
    ]);

        return redirect()->back()->with('success','Contact Info Updated Successfully');
   }
// Logo Part
   public function logo()
   {
        $main_logo = Logo::where('location', 'main')->get();
        $footer_logo = Logo::where('location', 'footer')->get();
        return view('admin.logo.logo',[
            'main_logo'=>$main_logo,
            'footer_logo'=>$footer_logo,
        ]);
   }
   public function Updatelogo(Request $request)
   {
        $image = $request->logo;
        $extension = $image->extension();
        $file_name = 'logo-'.time().'.'.$extension;
        Image::make($image)->save(public_path('uploads/logo/'.$file_name));

        Logo::find($request->logo_id)->update([
            'logo'=>$file_name,
            'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);

        return redirect()->back()->with('success','Logo Updated Successfully');
   }

// Social Media Part
    public function addSocial()
    {
        $social = Social::all();
        return view('admin.social.social',compact('social'));
    }

    public function storeSocial(Request $request)
    {
        $request->validate([
            'icon'=>'required',
            'link'=>'required',
        ]);
        Social::insert([
            'icon'=>$request->icon,
            'link'=>$request->link,
        ]);
        return back();
    }

    public function deleteSocial($id)
    {
        Social::find($id)->delete();

        return back();
    }
}
