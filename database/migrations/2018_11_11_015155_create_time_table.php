<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('time', function (Blueprint $table) {
            $table->increments('id');
            $table->string('day_ku_night', 20);
            $table->string('day_of_week_start', 20);
            $table->string('time_start', 255);
            $table->string('day_of_week_stop', 20);
            $table->string('time_stop', 255);
            $table->string('date_start', 255);
            $table->string('date_stop', 255);
            $table->string('date_ku_night', 255);
            $table->string('announce', 1000);

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
        Schema::dropIfExists('time');
    }
}
