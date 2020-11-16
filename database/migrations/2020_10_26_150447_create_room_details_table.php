<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('hotel_id')->unsigned();
            $table->string('room_type');
            $table->string('room_description1');
            $table->string('room_description2');
            $table->string('room_description3');
            $table->string('sleeps');
            $table->integer('today_price');
            $table->string('room_room_main_imageimage')->unique();;
            // $table->string('room_image2');
            // $table->string('room_image3');
            // $table->string('room_image4');

            // $table->foreign('hotel_id')
            //         ->references('id')
            //         ->on('hotel_register')
            //         ->onCascade('delete');

            $table->foreign('hotel_id')->references('id')->on('hotel_register')->onDelete('cascade');
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
        Schema::dropIfExists('room_details');
    }
}
