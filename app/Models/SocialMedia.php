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
     *|------------------------------------------------------------------------------
     * |Metodo para indicar que una red social pertenece a una barbería o un barbero-
     *|------------------------------------------------------------------------------
     */
    public function socialMediable(){
        return $this->morphTo();
    }
}
