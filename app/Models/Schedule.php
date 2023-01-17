<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'day',
        'start_time',
        'end_time',
    ];
    /**
     *|----------------------------------------------------------------------------------------
     * |Metodo para indicar que un horario pertenece a una barbería o un barbero dinamicamente-
     *|----------------------------------------------------------------------------------------
     */
    public function scheduleable(){
        return $this->morphTo();
    }
}
