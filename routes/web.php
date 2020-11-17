<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

     $hotel=DB::table('hotel_register')->get();
    return view('welcome',compact('hotel'));
});


// Route::get('/test', function () {
//     return view('admin/hotel/test');
// });

Route ::get('contact','HomeController@contact');
Route ::get('about','HomeController@about');

Route ::get('addhotels','Admin\HotelController@index')->name('addhotels.index');
//Route ::get('hotel','Admin\HotelController@Hotel')->name('hotel');

Route ::get('hotel','Admin\HotelController@Hotel')->name('hotel');

Route ::post('store','Admin\HotelController@Store');
Route ::get('addnewhotel','Admin\HotelController@addNewHotel')->name('addhotels.index');
Route ::get('edit/hotel/{id}','Admin\HotelController@Edit');
Route ::post('update/hotel/{id}','Admin\HotelController@Update');
Route ::get('delete/hotel/{id}','Admin\HotelController@Delete');

//hotel show
Route ::get('hotelshow/{id}','Admin\HotelController@HotelShow');


//Room

Route ::get('room','Admin\HotelController@Room')->name('room');
Route ::post('storeRoom','Admin\HotelController@StoreRoom');
Route ::get('edit/room/{id}/{hotel_id}','Admin\HotelController@EditRoom');
Route ::post('update/room/{id}','Admin\HotelController@UpdateRoom');
Route ::get('delete/room/{id}','Admin\HotelController@DeleteRoom');

//room images
Route ::get('addroomimages/{id}','Admin\HotelController@RoomImages');
Route ::post('storeRoomImage/{id}','Admin\HotelController@StoreRoomImage');


Route::get('addroomimages/delete/{id}','Admin\HotelController@DeleteRoomImages');


//cart Integrating controllers

Route::resource('shop', 'ProductController', ['only' => ['index', 'show']]);

Route::resource('cart', 'CartController');
Route::delete('emptyCart', 'CartController@emptyCart');
Route::post('switchToWishlist/{id}', 'CartController@switchToWishlist');

Route::resource('wishlist', 'WishlistController');
Route::delete('emptyWishlist', 'WishlistController@emptyWishlist');
Route::post('switchToCart/{id}', 'WishlistController@switchToCart');

//pdf

Route ::get('dynamic_pdf_one','DynamicPDFController@index');
Route::get('/dynamic_pdf/pdf', 'DynamicPDFController@pdf');

Route ::get('payment','HomeController@payment');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/filter_rooms', 'HomeController@filter_rooms');




// Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
//     Route::resource('/users','UsersController',['except'=>['show','create','store']]);
// });


Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::resource('/users','UsersController',['except'=>['show','create','store']]);
});
Route::post('/addtob','BokkingsController@book');
Route::post('/addtocart','BokkingsController@addtocart');
Route::get('/payhere',function(){
    return view('payhere');
});
