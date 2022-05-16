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
        Schema::create('miejsce_wieznias', function (Blueprint $table) {
            $table->integer('id_wieznia')->unsigned();
            $table->increments('Miejsce');
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
        Schema::dropIfExists('miejsce_wieznias');
    }
};
