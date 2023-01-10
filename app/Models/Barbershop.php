<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barbershop extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'schedule',
        'ubication',
        'map',
    ];

    /**
     *|------------------------------------------------------------
     * |Metodo para indicar que una barbería tiene muchos barberos-
     *|------------------------------------------------------------
     */
    public function barbers(){
        return $this->hasMany(Barber::class);
    }

    /**
     *|-------------------------------------------------------------
     * |Metodo para indicar que una barbería tiene muchos servicios-
     *|-------------------------------------------------------------
     */
    public function services(){
        return $this->hasMany(Service::class);
    }
    
    /**
     *|------------------------------------------------------------------
     * |Metodo para indicar que una barbería tiene muchas redes sociales-
     *|------------------------------------------------------------------
     */
    public function socialMedias(){
        return $this->hasMany(SocialMedia::class);
    }

    /**
     *|-------------------------------------------------------------------------------------------
     * |Metodo para indicar que una barbería tiene varios horarios (Dia, hora inicio, hora final)-
     *|-------------------------------------------------------------------------------------------
     */
    public function schedule(){
        return $this->hasMany(Schedule::class);
    }
}
