<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    use HasFactory;

    protected $fillable = [
        'data',
        'type',
        'barbershop_barber_id',
    ];

    /**
     *|-----------------------------------------------------------------
     * |Metodo para indicar que una red social pertenece a una barbería-
     *|-----------------------------------------------------------------
     */
    public function barbershop(){
        return $this->belongsTo(Barbershop::class);
    }

    /**
     *|--------------------------------------------------------------
     * |Metodo para indicar que una red social pertenece a un barber-
     *|--------------------------------------------------------------
     */
    public function barber(){
        return $this->belongsTo(Barber::class);
    }
}
