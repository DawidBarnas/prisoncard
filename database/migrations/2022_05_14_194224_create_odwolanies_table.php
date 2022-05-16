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
        Schema::create('odwolanies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_procesu')->unsigned();
            $table->date('data_zgloszenia');
            $table->date('data_rozprawy');
            $table->string('Status');
            $table->foreign('id_procesu')->references('id')->on('proces');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('odwolanies');
    }
};
