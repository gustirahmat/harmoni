<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBoatSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boat_schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('hari')->nullable();
            $table->string('nama_kapal')->nullable();
            $table->string('lokasi_pelabuhan')->nullable();
            $table->time('menuju_karimunjawa')->nullable();
            $table->time('dari_karimunjawa')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('boat_schedules');
    }
}
