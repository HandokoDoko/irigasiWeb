<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbTitikIrigasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('titikIrigasi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idIrigasi');
            $table->string('nama');
            $table->string('lat');
            $table->string('long');
            $table->string('desc');
            $table->rememberToken();
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
        Schema::drop('titikIrigasi');
    }
}
