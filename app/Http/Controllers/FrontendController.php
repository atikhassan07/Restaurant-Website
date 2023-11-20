<?php

namespace App\Http\Controllers;

use App\Models\Contactinfo;
use App\Models\Gallery;
use App\Models\Item;
use App\Models\Logo;
use App\Models\Menu;
use App\Models\Social;
use App\Models\Specialcategory;
use App\Models\Specialpart;
use App\Models\Whychoosse;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $menus = Menu::all();
        $items = Item::where('status',1)->get();
        $whychose = Whychoosse::where('status',1)->get();
        $special_category = Specialcategory::all();
        $special_items = Specialpart::where('status',1)->get();
        $contactInfo = Contactinfo::where('id',1)->first();
        $social = Social::all();
        $gallaries = Gallery::where('status',1)->get();

        return view('frontend.index',[
            'menus' => $menus,
            'items' => $items,
            'whychose' => $whychose,
            'special_category' => $special_category,
            'special_items' => $special_items,
            'contactInfo' => $contactInfo,
            'social' => $social,
            'gallaries' => $gallaries,
        ]);
    }


}
