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
        Schema::create('przestepstwos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_wieznia')->unsigned();
            $table->date('data_popelnienia');
            $table->date('data_rozprawy');
            $table->string('Klasyfikacja');
            $table->string('Status');
            $table->foreign('id_wieznia')->references('id')->on('prisoners');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('przestepstwos');
    }
};
