<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Web extends Migration
{
    public function up()
    {
        Schema::create('web', function (Blueprint $table) {
            $table->id();
            $table->char("seccion",100);
            $table->char("clave",255);
            $table->char("tipo",100);
            $table->text('valor');
        });
    }
    public function down()
    {
        Schema::dropIfExists('web');
    }
}
