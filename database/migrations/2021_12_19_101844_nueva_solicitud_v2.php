<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NuevaSolicitudV2 extends Migration
{
  public function up()
  {
      Schema::create('solicitudes', function (Blueprint $table) {
          $table->id();
          $table->unsignedBigInteger('apoderado_id');
          $table->foreign('apoderado_id')->references('id')->on('apoderados');
          $table->dateTime("fecha");
          $table->char("estado",100);
          $table->timestamps();
          $table->softDeletes();
      });
  }
  public function down()
  {
      Schema::table('solicitudes', function (Blueprint $table) {
        $table->dropForeign(['apoderado_id']);
      });
      Schema::dropIfExists('solicitudes');
  }
}
