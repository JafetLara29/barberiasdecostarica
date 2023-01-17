<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barber extends Model
{
    use HasFactory;

    protected $fillable = [
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
     *|----------------------------------------------------------------------------------------
     * |Metodo para indicar que una barbero tiene muchas redes sociales (relacion polimorfica)-
     *|----------------------------------------------------------------------------------------
     */
    public function socialMedias(){
        return $this->morphMany(SocialMedia::class, 'socialMediable');
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
     *|----------------------------------------------------------------------------------------------------------------
     * |Metodo para indicar que un barbero tiene varios horarios (Dia, hora inicio, hora final) (relacion polimorfica)-
     *|----------------------------------------------------------------------------------------------------------------
     */
    public function schedules(){
        return $this->morphMany(Schedule::class, 'scheduleable');
    }

    /**
     *|-------------------------------------------------------------
     * |Metodo para indicar que una barbería tiene muchos servicios-
     *|-------------------------------------------------------------
     */
    public function services(){
        return $this->hasMany(Service::class);
    }
}
