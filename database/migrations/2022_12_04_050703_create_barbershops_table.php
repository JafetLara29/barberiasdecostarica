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
        Schema::create('barbershops', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('schedule',500)->unsigned();
            $table->string('ubication',256)->unique();
            $table->string('map')->unique();
            $table->timestamps();



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barbershops');
    }
};
