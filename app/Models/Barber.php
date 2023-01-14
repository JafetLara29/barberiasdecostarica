<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barber extends Model
{
    use HasFactory;

    protected $fillable = [
        'barber_id',
        'name',
        'image',
        'barbershop_id',
    ];

    /**
     *|-------------------------------------------------------------
     * |Metodo para indicar que un barbero pertenece a una barbería-
     *|-------------------------------------------------------------
     */
    public function barbershop(){
        return $this->belongsTo(Barbershop::class);
    }

    /**
     *|------------------------------------------------------------------
     * |Metodo para indicar que una barbero tiene muchas redes sociales-
     *|------------------------------------------------------------------
     */
    public function socialMedias(){
        return $this->hasMany(SocialMedia::class);
    }

    /**
     *|-------------------------------------------------------
     * |Metodo para indicar que un barbero tiene muchas citas-
     *|-------------------------------------------------------
     */
    public function citations(){
        return $this->hasMany(Citation::class);
    }

    /**
     *|-----------------------------------------------------------------------------------------
     * |Metodo para indicar que un barbero tiene varios horarios (Dia, hora inicio, hora final)-
     *|-----------------------------------------------------------------------------------------
     */
    public function schedule(){
        return $this->hasMany(Schedule::class);
    }
}
