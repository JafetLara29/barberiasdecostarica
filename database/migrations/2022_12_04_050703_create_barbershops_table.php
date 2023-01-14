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
            $table->string('name');
            $table->string('schedule',500);
            $table->string('ubication',256);
            $table->string('map')->unique();

            // Agregar campo para numero de barberos permitidos int
            $table->integer('total_barbers')->unsigned();
            // Agregar campo para numero de barberos creados
            $table->integer('created_barbers')->unsigned();

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
