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
        Schema::create('wizytas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_wieznia')->unsigned();
            $table->date('data_wizyty');
            $table->integer('czas_trwania');
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
        Schema::dropIfExists('wizytas');
    }
};
