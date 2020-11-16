<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = [
        'id ', 'hotel_name', 'hotel_location','hotel_ownear','hotel_address','city','state','postal_code','cont_number','website'
        ,'hotel_main_image'
    ];
}
