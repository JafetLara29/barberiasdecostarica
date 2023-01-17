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
            $table->string('address', 500);//Direccion exacta
            $table->string('canton', 100);//Canton para filtrar por canton en un futuro
            // $table->string('map'); Queda a la espera hasta determinar la herramiento a usar
            $table->integer('total_barbers_available');
            $table->integer('created_barbers');
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
