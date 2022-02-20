<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment', function (Blueprint $table) {
            $table->bigIncrements('id_comment');
            $table->integer('id_account')->nullable();
            $table->string('email',255);
            $table->string('full_name',255);
            $table->integer('status');
            $table->text('comment_content');
            $table->integer('id_news')->nullable();
            $table->integer('id_tour')->nullable();
            $table->integer('id_hotel')->nullable();
            $table->string('date_comment',50);
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
        Schema::dropIfExists('comment');
    }
}
