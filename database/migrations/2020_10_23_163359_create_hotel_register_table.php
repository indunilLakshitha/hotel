<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelRegisterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_register', function (Blueprint $table) {
            $table->id('id');
            $table->bigInteger('room_id')->nullable();
            $table->string('hotel_name');
            $table->string('hotel_location');
            $table->string('hotel_ownear');
            $table->string('hotel_address');
            $table->string('city');
            $table->string('state');
            $table->integer('postal_code');
            $table->integer('cont_number')->length(10);
            $table->string('website');
            $table->string('hotel_main_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel_register');
    }
}
