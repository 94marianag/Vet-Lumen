<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ave extends Model
{
    protected $table = 'aves';

    protected $fillable = [
        'nombre',
        'edad',
        'raza',
        'telefono',
    ];

    protected $hidden = ['created_at', 'updated_at'];
}