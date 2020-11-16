<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests;
use DB;

class ProductController extends Controller
{
    public function show($id)
    {
       // $product = Product::where('id', $id)->firstOrFail();

        $product=DB::table('room_details')->where('id',$id)->first();

       // dd($rooms);
       // $interested = Product::where('id', '!=', $id)->get()->random(4);

       // return view('product')->with(['product' => $product, 'interested' => $interested]);
        return view('product')->with(['product' => $product]);

       //return view('product',compact('hotel','rooms'));
    }
}
