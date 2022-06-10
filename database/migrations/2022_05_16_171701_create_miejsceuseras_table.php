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
        Schema::create('miejsceuseras', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_straznika')->unsigned();
            $table->enum('Miejsce', ['Pietro1','Pietro2','Pietro3','Parter','Spacerniak','Brak']);
            $table->foreign('id_straznika')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('miejsceuseras');
    }
};
