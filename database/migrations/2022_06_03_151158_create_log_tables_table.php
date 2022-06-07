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
            $table->enum('typ', ['GuardEdit','GuardDelete','GuardAdd','PrisonerEdit','PrisonerDelete','PrisonerAdd']);
            $table->string('user_ac');
            $table->integer('id_n');
            $table->string('name');
            $table->string('surname');
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
