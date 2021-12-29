<?php
namespace App\Helpers;
use Carbon\Carbon;

class ieijm{

  public static function fecha_tabla($fecha_iso){
    $ft=$fecha_iso->format("d/m/Y");
    return $ft;
  }
  public static function fecha_tabla_larga($fecha_iso){
    $ft=$fecha_iso->format("d/m/Y H:m:s");
    return $ft;
  }

}
