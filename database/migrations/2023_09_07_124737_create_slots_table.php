<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slots', function (Blueprint $table) {
            $table->unsignedBigInteger('movie_id');
            $table->unsignedBigInteger('theater_id');
            $table->primary(['movie_id','theater_id']);
            $table->foreign('movie_id')->references('movie_id')->on('movies');
            $table->foreign('theater_id')->references('theater_id')->on('theaters');
            $table->dateTime('time_start');
            $table->dateTime('time_end');
            $table->integer('room_no');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slots');
    }
};
