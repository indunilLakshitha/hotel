<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\DB as FacadesDB;

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
        return Cart::content();
        foreach(Cart::content() as $i){
             return $r = FacadesDB::table('room_details')->where('hotel_id', $i->id)->where('room_type', $i->name)->first();
            $r->booked = 1;
            $r->save();
        };
        return view('cardpayment');
    }


}
