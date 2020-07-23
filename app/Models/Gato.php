<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gato extends Model
{
    protected $table = 'gatos';

    protected $fillable = [
        'nombre',
        'edad',
        'raza',
        'telefono',
    ];

    protected $hidden = ['created_at', 'updated_at'];
}