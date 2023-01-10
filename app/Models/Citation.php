<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citation extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
        'time',
        'service_id',
        'barber_id',
        'sender',
        'read',
    ];
    
    /**
     *|---------------------------------------------------------
     * |Metodo para indicar que una cita pertenece a un barbero-
     *|---------------------------------------------------------
     */
    public function barber(){
        return $this->belongsTo(Barber::class);
    }

    /**
     *|---------------------------------------------------------
     * |Metodo para indicar que una cita tiene varios servicios-
     *|---------------------------------------------------------
     */
    public function services(){
        return $this->belongsTo(Service::class);
    }
}
