<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableRoomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room', function (Blueprint $table) {
            $table->bigIncrements('id_room');
            $table->integer('id_hotel');
            $table->string('name_room',255);
            $table->string('suitable_room',255);
            $table->string('size_room',255);
            $table->integer('bed_room');
            $table->string('bathroom_room',255);
            $table->text('facilities_room');
            $table->integer('Smoking_room');
            $table->integer('Parking_room');
            $table->integer('price_room');
			$table->text('room_img');
			$table->integer('amount_room');
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
        Schema::dropIfExists('room');
    }
}
