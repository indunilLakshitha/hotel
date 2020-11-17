<?php

namespace App\Http\Controllers;

use App\Bookings;
use Illuminate\Http\Request;


use App\Http\Requests;

// use Darryldecode\Cart\Facades\CartFacade as Cart;
use \Cart as Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Validator;


class CartController extends Controller
{
    public function index()
    {
          $itemss=DB::table('bookings')
        ->leftjoin('room_details','room_details.id','bookings.room_id')
        ->select('bookings.*','room_details.*')
        ->where('bookings.user_id',Auth::user()->id)
        ->where('bookings.is_payed',0
        )->get();
        return view('cart',compact('itemss'));
    }


    public function store(Request $request)
    {
        // $duplicates = Cart::search(function ($cartItem, $rowId) use ($request) {
            // return $cartItem->id === $request->id;
        // });

        // if (!$duplicates->isEmpty()) {
            // return redirect('cart')->withSuccessMessage('Item is already in your cart!');
        // }
        //dd(request()->all());
    //    Cart::add($request->id, $request->name, 1, $request->price)->associate('App\Product');
       return redirect('cart')->withSuccessMessage('Item was added to your cart!');

      // Cart::add('293ad', 'Product 1', 1, 9.99, 550, ['size' => 'large']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        // Validation on max quantity
        $validator = Validator::make($request->all(), [
            'quantity' => 'required|numeric|between:1,5'
        ]);

         if ($validator->fails()) {
            session()->flash('error_message', 'Quantity must be between 1 and 5.');
            return response()->json(['success' => false]);
         }

        Cart::update($id, $request->quantity);
        session()->flash('success_message', 'Quantity was updated successfully!');

        return response()->json(['success' => true]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        return redirect('cart')->withSuccessMessage('Item has been removed!');
    }

    /**
     * Remove the resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function emptyCart()
    {
        Cart::destroy();
        return redirect('cart')->withSuccessMessage('Your cart has been cleared!');
    }

    /**
     * Switch item from shopping cart to wishlist.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function switchToWishlist($id)
    {
        $item = Cart::get($id);

        Cart::remove($id);

        $duplicates = Cart::instance('wishlist')->search(function ($cartItem, $rowId) use ($id) {
            return $cartItem->id === $id;
        });

        if (!$duplicates->isEmpty()) {
            return redirect('cart')->withSuccessMessage('Item is already in your Wishlist!');
        }

        Cart::instance('wishlist')->add($item->id, $item->room_type, 1, $item->today_price)
                                  ->associate('App\Product');

        return redirect('cart')->withSuccessMessage('Item has been moved to your Wishlist!');

    }
}
