<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ReservationController extends Controller

{
    public function ReservationStore(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'date'=>'required',
            'time'=>'required',
            'people'=>'required',
        ]);
        $insert = Reservation::insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'date'=>$request->date,
            'time'=>$request->time,
            'people'=>$request->people,
            'message'=>$request->message,
            'created_at'=>Carbon::now(),
        ]);
        if ($insert) {
            Session::flash('success', 'Message Sent Successfully');
            return redirect()->back();
        }
    }

    public function ReservationSingleView($id)
    {
        $reservations = Reservation::find($id);
        return view('admin.reservation.single_view',compact('reservations'));
    }
}
