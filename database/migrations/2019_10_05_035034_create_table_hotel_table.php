<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableHotelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel', function (Blueprint $table) {
            $table->bigIncrements('id_hotel');
			$table->integer('id_account');
            $table->string('hotel_name');
            $table->integer('rating')->nullable();
            $table->integer('hotel_price');
            $table->text('tmp_name')->nullable();
            $table->integer('location');
            $table->text('hotel_describes');
            $table->text('hotel_img');
            $table->text('hotel_address');
            $table->integer('sale');
            $table->integer('status');
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
        Schema::dropIfExists('hotel');
    }
}
