<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbFotoTitikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fotoTitikIrigasi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idTitikIrigasi');
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
        Schema::drop('fotoTitikIrigasi');
    }
}
