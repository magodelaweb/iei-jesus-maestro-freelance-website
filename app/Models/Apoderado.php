<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Apoderado extends Model
{
    use SoftDeletes;

    protected $table="apoderados";

    protected $fillable = [
        'documento',
        'tipo_documento',
        'apellido_paterno',
        'apellido_materno',
        'nombres',
        'correo_electronico',
        'parentesco',
        'telefono_fijo',
        'celular'
    ];

    protected $hidden = [
        'id'
    ];

    protected $casts = [
        // 'fecha' => 'datetime',
    ];

    public function solicitudes(){
      return $this->hasMany(Solicitud::class);
    }

    public function dependientes(){
        return $this->hasMany(Dependiente::class);
    }
}
