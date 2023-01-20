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
            $table->time('time');//Necesitamos un time porque el schedule solo nos da la fecha y un rango de horas, no la hora especifica
            $table->unsignedBiginteger('service_id');
            $table->unsignedBiginteger('barber_id');
            $table->unsignedBiginteger('schedule_id');
            $table->string('sender');
            $table->boolean('read')->default(false);

            $table->foreign('service_id')->references('id')->on('services');
            $table->foreign('barber_id')->references('id')->on('barbers');
            $table->foreign('schedule_id')->references('id')->on('schedules');

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
