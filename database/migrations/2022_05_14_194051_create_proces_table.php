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
        Schema::create('proces', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_kary')->unsigned();
            $table->string('Status');
            $table->date('data_procesu');
            $table->integer('Grzywna');
            $table->foreign('id_kary')->references('id')->on('karas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proces');
    }
};
