<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreaDependiente extends Migration
{
    public function up()
    {
        Schema::create('dependientes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('apoderado_id');
            $table->foreign('apoderado_id')->references('id')->on('apoderados');
            $table->char("documento",50);
            $table->char("tipo_documento",30);
            $table->char("apellido_paterno",100);
            $table->char("apellido_materno",100);
            $table->char("nombres",200);
            $table->char("grado",1);
            $table->date("fecha_nacimiento");
            $table->char("sexo",1);
            $table->timestamps();
            $table->softDeletes();
        });
    }
    public function down()
    {
        Schema::table('dependientes', function (Blueprint $table) {
          $table->dropForeign(['apoderado_id']);
        });
        Schema::dropIfExists('dependientes');
    }
}
