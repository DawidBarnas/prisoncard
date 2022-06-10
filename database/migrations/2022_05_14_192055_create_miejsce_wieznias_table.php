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
            $table->increments('id');
            $table->integer('id_wieznia')->unsigned();
            $table->enum('Miejsce', ['Cela','Przepustka','Spacerniak','Izolacja1','Izolacja2','Izolacja3']);
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
