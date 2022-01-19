<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Imagenes extends Migration
{
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->char("nombre",255);
            $table->char("categoria",100);//["Logos",...,"Banners"]
            $table->char("descripcion",255);
            $table->integer("peso_bytes");
            $table->integer("en_uso")->default(0);
            $table->dateTime("ultimo_uso");
            $table->char("estado",100);// ["OK","Error"]
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('images');
    }
}
