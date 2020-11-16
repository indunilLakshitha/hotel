<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HotelImage extends Model
{
    protected $fillable = [
        'id', 'room_detail_id', 'room_image_description','room_image'
    ];
}
