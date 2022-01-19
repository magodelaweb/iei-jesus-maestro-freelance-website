<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

    protected $table="images";

    protected $fillable = [
        'nombre',
        'categoria',
        'descripcion',
        'peso_bytes',
        'en_uso',
        'ultimo_uso',
        'estado'
    ];

    protected $hidden = [
        'id'
    ];

    protected $casts = [
        'ultimo_uso' => 'datetime',
    ];
}
