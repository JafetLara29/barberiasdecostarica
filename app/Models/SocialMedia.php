<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    use HasFactory;

    protected $fillable = [
        'social_mediable_id',
        'social_mediable_type',
        'data',
        'type',
    ];

    /**
     *|------------------------------------------------------------------------------
     * |Metodo para indicar que una red social pertenece a una barbería o un barbero-
     *|------------------------------------------------------------------------------
     */
    public function social_mediable(){
        return $this->morphTo();
    }
}
