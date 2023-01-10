<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    /**
     *|-------------------------------------------------------------
     * |Metodo para indicar que un horario pertenece a una barbería-
     *|-------------------------------------------------------------
     */
    public function barbershop(){
        return $this->belongsTo(Barbershop::class);
    }

    /**
     *|-----------------------------------------------------------
     * |Metodo para indicar que un horario pertenece a un barbero-
     *|-----------------------------------------------------------
     */
    public function barber(){
        return $this->belongsTo(Barber::class);
    }
}
