<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dependiente extends Model
{
    use SoftDeletes;

    protected $table="dependientes";

    protected $fillable = [
        'documento',
        'tipo_documento',
        'apellido_paterno',
        'apellido_materno',
        'nombres',
        'grado',
        'fecha_nacimiento',
        'sexo'
    ];

    protected $hidden = [
        'id',
        'solicitud_id'
    ];

    protected $casts = [
        'fecha_nacimiento' => 'datetime',
    ];

    public function apoderado(){
      return $this->belongsTo(Apoderado::class);
    }
}
