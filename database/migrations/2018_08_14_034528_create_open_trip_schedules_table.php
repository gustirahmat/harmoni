<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOpenTripSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('open_trip_schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nama_trip')->nullable();
            $table->integer('kuota_trip')->nullable();
            $table->date('tanggal_trip')->nullable();
            $table->string('lama_trip')->nullable();
            $table->boolean('aktif')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('open_trip_schedules');
    }
}
