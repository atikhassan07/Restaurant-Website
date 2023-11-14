<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function item()
    {
        $items = Item::where('status',1)->orderBy('id', 'DESC')->get();
        return view('admin.menu.item.item',[
            'items' => $items,
        ]);
    }

    public function add()
    {
        return view('admin.menu.item.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'item_name' =>'required',
            'sub_title' =>'required',
            'item_price' =>'required',
        ]);

        Item::insert([
            'menu_id' => $request->menu_id,
            'item_name' => $request->item_name,
            'sub_title' => $request->sub_title,
            'item_price' => $request->item_price,
            'item_details' => $request->item_details,
            'created_at' => Carbon::now(),
        ]);

        return back()->with('success', 'Item Added Successfully');
     }
    //  item edit code
    public function edit($id)
    {
        $Edititems = Item::find($id);
        return view('admin.menu.item.edit',[
            'Edititems' => $Edititems,
        ]);
    }
    //update code
    public function update(Request $request, $id)
    {

        Item::find($id)->update([
            'item_name' => $request->item_name,
            'sub_title' => $request->sub_title,
            'item_price' => $request->item_price,
            'item_details' => $request->item_details,
            'updated_at' => Carbon::now(),
        ]);

        return back()->with('success', 'Item Updated Successfully');
    }
    //delete code
    public function delete($id)
    {
        Item::where('status',1)->where('id',$id)->update([
            'status' => 0,
        ]);
        return back()->with('success', 'Item Deleted Successfully');
    }
}
