<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'scheduleable_id',
        'scheduleable_type',
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
    /**
     *|--------------------------------------------------------
     * |Metodo para indicar que un horario tiene varias citas -
     *|--------------------------------------------------------
     */
    public function citations(){
        return $this->hasMany(Citation::class);
    }
}
