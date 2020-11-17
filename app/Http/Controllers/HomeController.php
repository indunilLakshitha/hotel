<?php

namespace App\Http\Controllers;

use App\Bookings;
use Illuminate\Http\Request;
use DB;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB as FacadesDB;
use phpDocumentor\Reflection\Types\Boolean;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $hotel=DB::table('hotel_register')->get();
        $cities = array();

        foreach($hotel as $h){
            array_push($cities, $h->city);
        }
        // return $cities;
        return view('home',compact('hotel', 'cities'));
    }

    public function filter_rooms(Request $request){
        $cities = array();

        $hotel=DB::table('hotel_register')->where('city', $request->city)->get();
        foreach($hotel as $h){
            array_push($cities, $h->city);
        }

        return view('home',compact('hotel', 'cities'));
    }

    public function contact(){
        return view('contact');
    }
    public function about(){
        return view('about');
    }

    public function payment()
    {
         $rooms=Bookings::where('user_id',Auth::user()->id)->where('is_payed',0)->get();
        $total=0;
        foreach($rooms as $room){
            $room->is_payed=1;
             $room->save();
              $price=DB::table('room_details')->where('id',$room->room_id)->get();
             $total+=$price[0]->today_price;
             $price[0]->available-=1;
             $price[0]->booked+=1;
             DB::table('room_details')->where('id',$room->room_id)->update(['available'=>$price[0]->available,'booked'=>$price[0]->booked]);

        }

        return view('cardpayment',compact('total'));
    }


}
