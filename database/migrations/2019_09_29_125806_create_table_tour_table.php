<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTourTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour', function (Blueprint $table) {
            $table->bigIncrements('id_tour');
            $table->string('tour_name', 255);
            $table->text('tmp_name')->nullable();
            $table->integer('number_of_people');
            $table->text('tour_description');
            $table->integer('rating')->nullable();
            $table->integer('tour_price');
            $table->integer('sale');
            $table->integer('location');
            $table->text('tour_img');
            $table->integer('duration_tour');
            $table->string('start_day',50);
            $table->string('end_day',50);
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
        Schema::dropIfExists('tour');
    }
}
