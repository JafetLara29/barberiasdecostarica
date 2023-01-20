<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    
    /**
     *|---------------------------------------------------------------------------
     * |Metodo para indicar que un servicio pertenece a una barbería o un barbero-
     *|---------------------------------------------------------------------------
     */
    public function serviceable(){
        return $this->morphTo();
    }

    /**
     *|----------------------------------------------------------
     * |Metodo para indicar que un servicio pertenece a una cita-
     *|----------------------------------------------------------
     */
    public function citation(){
        return $this->belongsTo(Citation::class);
    }
}
