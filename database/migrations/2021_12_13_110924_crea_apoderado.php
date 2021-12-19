<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreaApoderado extends Migration
{
    public function up()
    {
        Schema::create('apoderados', function (Blueprint $table) {
            $table->id();
            $table->char("documento",50);
            $table->char("tipo_documento",30);
            $table->char("apellido_paterno",100);
            $table->char("apellido_materno",100);
            $table->char("nombres",200);
            $table->char("correo_electronico",255);
            $table->char("parentesco",100);
            $table->char("telefono_fijo",100);
            $table->char("celular",100);
            $table->timestamps();
            $table->softDeletes();
        });
    }
    public function down()
    {        
        Schema::dropIfExists('apoderados');
    }
}
