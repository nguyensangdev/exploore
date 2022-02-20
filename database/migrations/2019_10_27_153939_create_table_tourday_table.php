<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTourdayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_day', function (Blueprint $table) {
            $table->bigIncrements('id_tour_day');
            $table->integer('id_tour');
            $table->string('tour_day_name',255);
            $table->text('tour_day_content');
            $table->text('tour_day_img');
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
        Schema::dropIfExists('tour_day');
    }
}
