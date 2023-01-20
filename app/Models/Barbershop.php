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
        return $this->morphMany(Service::class, 'serviceable');
    }
    
    /**
     *|-----------------------------------------------------------------------------------------
     * |Metodo para indicar que una barberia tiene muchas redes sociales (relacion polimorfica)-
     *|-----------------------------------------------------------------------------------------
     */
    public function socialMedias(){
        return $this->morphMany(SocialMedia::class, 'socialMediable');
    }

    /**
     *|------------------------------------------------------------------------------------------------------------------
     * |Metodo para indicar que una barberia tiene varios horarios (Dia, hora inicio, hora final) (relacion polimorfica)-
     *|------------------------------------------------------------------------------------------------------------------
     */
    public function schedules(){
        return $this->morphMany(Schedule::class, 'scheduleable');
    }
}
