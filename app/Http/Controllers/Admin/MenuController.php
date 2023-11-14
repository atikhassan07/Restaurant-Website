<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }

    public function menu()
    {
        $menus = Menu::all();
        return view('admin.menu.menu',compact('menus'));
    }

    public function add()
    {
        return view('admin.menu.add');
    }
//Menu Insert Code
    public function store(Request $request)
    {
        $request->validate([
          'menu_name' =>'required',
        ]);

        $slug = 'Category'.'-'.uniqId();
        Menu::insert([
            'menu_name' =>$request->menu_name,
            'slug' =>$slug,
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);

        return redirect()->route('menu')->with('success', 'Menu Added Successfully');
    }
}
