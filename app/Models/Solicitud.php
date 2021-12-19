<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Solicitud extends Model
{
    use SoftDeletes;

    protected $table="solicitudes";

    protected $fillable = [
        'fecha',
        'estado'
    ];

    protected $hidden = [
        'id',
        'apoderado_id'
    ];

    protected $casts = [
        'fecha' => 'datetime',
    ];

    public function apoderado(){
        return $this->belongsTo(Apoderado::class);
    }

    public function dependientes(){
      return $this->hasManyThrough(Dependiente::class, Apoderado::class);
    }
}
