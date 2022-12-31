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

        Schema::create('citations', function (Blueprint $table) {

            $table->id();
            $table->string('date');
            $table->string('time');
            $table->unsignedBiginteger('service_id');
            $table->unsignedBiginteger('barber_id');
            $table->string('sender');
            $table->boolean('read')->default(1);

          //$table->foreign('service_id')->references('id')->on('services');
         //$table->foreign('barber_id')->references('id')->on('barbers');

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
        Schema::dropIfExists('citations');
    }
};
