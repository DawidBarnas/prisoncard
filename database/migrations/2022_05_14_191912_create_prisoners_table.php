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
        Schema::create('prisoners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Imie');
            $table->string('Nazwisko');
            $table->string('Miasto');
            $table->string('Ulica');
            $table->decimal('Waga');
            $table->integer('Wzrost');
            $table->integer('Telefon');
            $table->integer('id_celi')->unsigned();
            $table->boolean('mozliwosc_wizyt');
            $table->boolean('mozliwosc_przepustek');
            $table->string('Status_celi');
            $table->foreign('id_celi')->references('id')->on('celas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prisoners');
    }
};
