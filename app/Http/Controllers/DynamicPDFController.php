<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;


class DynamicPDFController extends Controller
{
    function index()
    {
        $hotel_data=$this->get_hotel_data();

      

        return view('pdf_one')->with('hotel_data',$hotel_data);
    }

    function get_hotel_data()
    {
        $hotel_data=DB::table('hotel_register')->limit(10)->get();
        return $hotel_data; 

    }

    function pdf()
    {
        $pdf=\App::make('dompdf.wrapper');
        $pdf->loadHTML($this->convert_customer_data_to_html());
        return $pdf->stream();
    }

    function convert_customer_data_to_html()
    {
        $hotel_data=$this->get_hotel_data();
        $output='

        <h1> Hotel Details</h1>
        
        <table width="100%" style="border-collapse: collapse; border: 0px;">
        <thead>
          <tr>
          
            <th style="border: 1px solid; padding:12px;" width="20%">ID</th>
            <th style="border: 1px solid; padding:12px;" width="20%">Hotel Name</th>
            <th style="border: 1px solid; padding:12px;" width="20%">Hotel Location</th>
            <th style="border: 1px solid; padding:12px;" width="20%">Hotel Ownear</th>
            <th style="border: 1px solid; padding:12px;" width="20%">Address</th>
            <th style="border: 1px solid; padding:12px;" width="20%">City</th>
            
            
          </tr>
        </thead>


        ';

        foreach($hotel_data as $hol)
       // dd($hol);
     {
      $output .= '
  
      <tr>
      <th style="border: 1px solid; padding:12px;" scope="row">' .$hol->id. '</th>
      <td style="border: 1px solid; padding:12px;" >'.$hol->hotel_name.'</td>
      <td style="border: 1px solid; padding:12px;" >'.$hol->hotel_location.'</td>
      <td style="border: 1px solid; padding:12px;" >'.$hol->hotel_ownear.'</td>
      <td style="border: 1px solid; padding:12px;" >'.$hol->hotel_address.'</td>
      <td style="border: 1px solid; padding:12px;" >'.$hol->city.'</td>
     
      
      </tr>
      ';
     }
     $output .= '</table>';
     //dd($output);
     return $output;
    }
}
