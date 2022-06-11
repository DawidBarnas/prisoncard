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
        Schema::create('log_tables', function (Blueprint $table) {
            $table->id();
            $table->enum('typ', ['GuardEdit','GuardDelete','GuardAdd','PrisonerEdit','PrisonerDelete','PrisonerAdd','GuardPlaceEdit','GuardPlaceDelete','GuardPlaceAdd','PrisonerPlaceEdit','PrisonerPlaceDelete','PrisonerPlaceAdd']);
            $table->string('user_ac');
            $table->integer('id_n');
            $table->string('name');
            $table->string('surname');
            $table->enum('Miejsceuser', ['Pietro1','Pietro2','Pietro3','Parter','Spacerniak','Brak'])->nullable();
            $table->enum('Miejsceprisoner', ['Cela','Przepustka','Spacerniak','Izolacja1','Izolacja2','Izolacja3'])->nullable();
            $table->timestamp('date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('log_tables');
    }
};
