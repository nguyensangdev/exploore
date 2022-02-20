<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->bigIncrements('id_booking');
            $table->integer('id_room')->nullable();
            $table->integer('id_tour')->nullable();
            $table->integer('id_account')->nullable();
            $table->string('email',50);
            $table->string('full_name',50);
            $table->integer('phone');
            $table->integer('day_number');
            $table->integer('people_number');
            $table->integer('payment_method');
            $table->string('start_day',50);
            $table->string('end_day',50);
            $table->text('note');
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
        Schema::dropIfExists('booking');
    }
}
