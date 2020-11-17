<?php

namespace App\Http\Controllers;

use App\Bookings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BokkingsController extends Controller
{
    public function book(Request $request){
return response()->json($request);
    }
    public function addtocart(Request $request){

        $booking=new Bookings();
        $booking['user_id']=Auth::user()->id;
        $booking['room_id']=$request->id;
        $booking['qty']=0;
        $booking['check_in']=0;
        $booking['check_out']=0;
        $booking->save();
        return redirect()->back()->withSuccessMessage('Item was added to your cart!');
    }
}
