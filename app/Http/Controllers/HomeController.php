<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
        return view('home',compact('hotel'));
    }

    public function contact(){
        return view('contact');
    }
    public function about(){
        return view('about');
    }

    public function payment()
    {
        return view('cardpayment');
    }


}
