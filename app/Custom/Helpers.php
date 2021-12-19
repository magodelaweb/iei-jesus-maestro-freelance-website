<?php

namespace App\Custom;

use Carbon\Carbon;

class Helpers{

  public static function make(){
    return new static();
  }

  public function fecha($cadena){
    $fecha=Carbon::parse($cadena);
    return $fecha;
  }

}
