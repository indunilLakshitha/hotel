<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Hotel;
use DB;

class HotelController extends Controller
{
    public function index()
    {
        // return view('admin/hotel/addhotel');
        return view('admin.hotel.addhotel');
    }

    public function Hotel()
    {
        $hotel=DB::table('hotel_register')->get();
        $rooms=DB::table('room_details')->get();
        $xx=DB::table('room_images')->get();



        return view('admin.hotel.addhotel',compact('hotel'),compact('rooms'),compact('xx'));


        // $xx=DB::table('room_images')->get();

        // return view('admin.hotel.addhotel',compact('xx'));

    }

    //Hotel Show
    public function HotelShow($id)
    {
        $hotel=DB::table('hotel_register')->where('id',$id)->first();
        $rooms=DB::table('room_details')->where('hotel_id',$id)->get();


        // $roomImage=DB::table('room_images')->get();



        // $room_id=DB::table('room_details')->where('id',$id)
        // ->select('room_details.id')
        // ->first()->id;


       // $xx=DB::table('room_images')->where('room_detail_id',$room_id)->first();

     // dd($xx);

        return view('admin.hotel.hotelshow',compact('hotel','rooms'));
    }

    public function addNewHotel()
    {
        // return view('admin/hotel/addhotel');
        return view('admin.hotel.addnewhotel');
    }

    public function Edit($id)
    {
        $hotel=DB::table('hotel_register')->where('id',$id)->first();
        return view('admin.hotel.editnewhotel',compact('hotel'));

    }

    public function Update(Request $request, $id)
    {

        $old_hotel=$request->old_hotel;

        //dd($old_hotel);

        $data=array();

        //dd($data);
        // dd(request()->all());

        $data['hotel_name']=$request->hotel_name;
        $data['hotel_location']=$request->hotel_location;
        $data['hotel_ownear']=$request->hotel_ownear;
        $data['hotel_address']=$request->hotel_address;
        $data['city']=$request->city;
        $data['state']=$request->state;
        $data['postal_code']=$request->postal_code;
        $data['cont_number']=$request->cont_number;
        $data['website']=$request->website;

        //dd($data['website']);

        $image=$request->file('hotel_main_image');
       //

       //dd($image);


        if($image){
            $image_name=date('dmy_H_s_i');
          //  unlink($old_hotel);

            //$ext=strtolower($image->getClientOriginalExtention());
            //$image_full_name=$image_name.'.'.$ext;
           $image_full_name=$image_name;
            $upload_path='public/media/';
            $image_url= $upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['hotel_main_image']=$image_url;
            $hotel_register=DB::table('hotel_register')->where('id',$id)->update($data);

            return redirect()->route('hotel');
             //dd($data);
           // return redirect()->route('hotel');
        }

    }




    public function Store(Request $request)
    {


        $data=array();

        //dd(request()->all());

        $data['hotel_name']=$request->hotel_name;
        $data['hotel_location']=$request->hotel_location;
        $data['hotel_ownear']=$request->hotel_ownear;
        $data['hotel_address']=$request->hotel_address;
        $data['city']=$request->city;
        $data['state']=$request->state;
        $data['postal_code']=$request->postal_code;
        $data['cont_number']=$request->cont_number;
        $data['website']=$request->website;


        $image=$request->file('hotel_main_image');

        if($image){
            $image_name=date('dmy_H_s_i');
           $image_full_name=$image_name;
            $upload_path='public/media/';
            $image_url= $upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['hotel_main_image']=$image_url;

            $hotel_register=DB::table('hotel_register')->insert($data);

            return redirect()->route('hotel');
        }

    }

    public function Delete($id)
    {

        $hotel=DB::table('hotel_register')->where('id',$id)->delete();

        return redirect()->route('hotel');
    }




    //Room

    public function Room()
    {

        $hotel=DB::table('hotel_register')->get();

        return view('admin.hotel.addRoom',compact('hotel'));
    }

    public function StoreRoom(Request $request)
    {


        $data=array();

       // dd(request()->all());

        $data['hotel_id']=$request->hotel_id;
        $data['room_type']=$request->room_type;
        $data['room_description1']=$request->room_description1;
        $data['room_description2']=$request->room_description2;
        $data['room_description3']=$request->room_description3;
        $data['sleeps']=$request->sleeps;
        $data['today_price']=$request->today_price;


        $image=$request->file('room_main_image');

        if($image){
            $image_name=date('dmy_H_s_i');

           $image_full_name=$image_name;
            $upload_path='public/media/';
            $image_url= $upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['room_room_main_imageimage']=$image_url;
            $hotel_register=DB::table('room_details')->insert($data);
            //return redirect()->back()->withInput();
            return redirect()->route('hotel');

        }

       // $hotel_register=DB::table('room_details')->insert($data);
       //  return redirect()->route('hotel');


    }


    public function EditRoom($id,$hotel_id)
    {
         // dd(request()->all());
        $room=DB::table('room_details')->where('id',$id)->first();
        $hotel=DB::table('hotel_register')->get();
       // dd($room);


    // $hotelx = DB::table('hotel_register')
    // ->join('room_details', 'hotel_register.id', '=', 'room_details.hotel_id')
    // ->where(['room_details.id'=>$id,'hotel_register.id'=>$hotel_id])
    // ->select('hotel_register.hotel_name')
    // ->first();

     // dd($hotelName);

     //return view('admin.hotel.editroom',compact('room'),compact('hotel'),compact('hotelx'));


    return view('admin.hotel.editroom',compact('room'),compact('hotel'));

    }


    public function DeleteRoom($id)
    {

        $hotel=DB::table('room_details')->where('id',$id)->delete();
       // dd($hotel);
        //  dd(request()->all());
        return redirect()->route('hotel');
    }


    public function UpdateRoom(Request $request, $id)
    {


        $data=array();

       // dd(request()->all());

        $data['hotel_id']=$request->hotel_id;
        $data['room_type']=$request->room_type;
        $data['room_description1']=$request->room_description1;
        $data['room_description2']=$request->room_description2;
        $data['room_description3']=$request->room_description3;
        $data['sleeps']=$request->sleeps;
        $data['today_price']=$request->today_price;


        $image1=$request->file('room_image1');
        $image2=$request->file('room_image2');
        $image3=$request->file('room_image3');
        $image4=$request->file('room_image4');

        if($image1 && $image2 && $image3 && $image4){
            if($image1){
                $image_name=date('dmy_H_s_i');

               $image_full_name=$image_name;
                $upload_path='public/media/';
                $image_url= $upload_path.$image_full_name;
                $success=$image1->move($upload_path,$image_full_name);
                $data['room_image1']=$image_url;

            }

            if($image2){
                $image_name=date('dmy_H_s_i');

               $image_full_name=$image_name;
                $upload_path='public/media/';
                $image_url= $upload_path.$image_full_name;
                $success=$image2->move($upload_path,$image_full_name);
                $data['room_image2']=$image_url;


            }
            if($image3){
                $image_name=date('dmy_H_s_i');

               $image_full_name=$image_name;
                $upload_path='public/media/';
                $image_url= $upload_path.$image_full_name;
                $success=$image3->move($upload_path,$image_full_name);
                $data['room_image3']=$image_url;


            }
            if($image4){
                $image_name=date('dmy_H_s_i');
               $image_full_name=$image_name;
                $upload_path='public/media/';
                $image_url= $upload_path.$image_full_name;
                $success=$image4->move($upload_path,$image_full_name);
                $data['room_image4']=$image_url;


            }
            $hotel_register=DB::table('room_details')->where('id',$id)->update($data);
           // $hotel_register=DB::table('room_details')->insert($data);
            return redirect()->route('hotel');
        }

    }

    public function RoomImages($id)
    {

        $room=DB::table('room_details')->where('id',$id)->first();
        // $xx=DB::table('room_images')->get();

        $room_id=DB::table('room_details')->where('id',$id)
        ->select('room_details.id')
        ->first()->id;


       $xx=DB::table('room_images')->where('room_detail_id',$room_id)->get();


        $hotelId=DB::table('room_details')->where('id',$id)
        ->select('room_details.hotel_id')
        ->first()->hotel_id;
        $hotel=DB::table('hotel_register')->where('id',$hotelId)
     //  ->select('hotel_register.hotel_name')
       ->first();
        // dd($xx);
        return view('admin.hotel.addroomimages',compact('room','xx','hotel'));
    }




    public function StoreRoomImage(Request $request,$id)
    {


        $data=array();

        //dd(request()->all());

        $data['room_detail_id']=$request->room_detail_id;
        $data['room_image_description']=$request->room_image_description;



           // dd($id);

        $image=$request->file('room_image');

            if($image){
                $image_name=date('dmy_H_s_i');

               $image_full_name=$image_name;
                $upload_path='public/media/';
                $image_url= $upload_path.$image_full_name;
                $success=$image->move($upload_path,$image_full_name);
                $data['room_image']=$image_url;
                $hotel_register=DB::table('room_images')->insert($data);
                return redirect()->back()->withInput();

            }

    }

    public function DeleteRoomImages($id)
    {

       $hotel=DB::table('room_images')->where('id',$id)->delete();
       return redirect()->back()->withInput();

    }


}
