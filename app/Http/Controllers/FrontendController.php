<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Menu;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $menus = Menu::all();
        $items = Item::where('status',1)->get();
        return view('frontend.index',[
            'menus' => $menus,
            'items' => $items,
        ]);
    }
}
