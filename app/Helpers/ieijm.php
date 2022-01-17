<?php
namespace App\Helpers;

use Illuminate\Support\Collection;
use Carbon\Carbon;
use App\Custom\Enums;

class ieijm{

  public static function fecha_tabla($fecha_iso){
    $ft=$fecha_iso->format("d/m/Y");
    return $ft;
  }
  public static function fecha_tabla_larga($fecha_iso){
    $ft=$fecha_iso->format("d/m/Y H:m:s");
    return $ft;
  }
  public static function sexo_largo($char){
    $sexo=Enums::make()->sexo_largo($char);
    return $sexo;
  }
  public static function ctc($collection,$clave){
    if($collection instanceof Collection) {
      $item=$collection->where('clave',$clave)->first();
      if (isset($item)) {
        return $item->valor;
      }
    }
    return "";
  }
  public static function sti($cadena){
    $prepare=explode(' ',$cadena);
    return implode($prepare);
  }
  public static function sizeToHuman($size){
    if ($size >= 1073741824) {
      $fileSize = round($size / 1024 / 1024 / 1024,1) . ' GB';
    } elseif ($size >= 1048576) {
        $fileSize = round($size / 1024 / 1024,1) . ' MB';
    } elseif($size >= 1024) {
        $fileSize = round($size / 1024,1) . ' KB';
    } else {
        $fileSize = $size . ' bytes';
    }
    return $fileSize;
  }
}
