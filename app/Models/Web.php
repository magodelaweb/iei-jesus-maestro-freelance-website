<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Web extends Model
{

    protected $table="web";
    public $timestamps = false;

    protected $fillable = [
        'seccion',
        'clave',
        'tipo',
        'valor'
    ];

    protected $hidden = [
        'id'
    ];

}
