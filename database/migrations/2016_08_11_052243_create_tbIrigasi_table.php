<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbIrigasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('irigasi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->integer('kewenangan');
            $table->string('Kecamatan');
            $table->string('jlhBendung');
            $table->string('panjangSaluran');
            $table->string('saluranPrimer');
            $table->string('jnsSaluranPrimer');
            $table->string('saluranSkunder');
            $table->string('jnsSaluranSkunder');
            $table->string('debitAir');
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
        Schema::drop('irigasi');
    }
}
