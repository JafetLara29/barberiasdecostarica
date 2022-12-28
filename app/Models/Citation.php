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

}
