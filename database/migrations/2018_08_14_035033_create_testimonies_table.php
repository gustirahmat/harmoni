<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTestimoniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimonies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_tamu')->nullable();
            $table->text('testimoni')->nullable();
            $table->date('tanggal_trip')->nullable();
            $table->string('domisili_tamu')->nullable();
            $table->timestampsTz();
            $table->softDeletesTz();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('testimonies');
    }
}
