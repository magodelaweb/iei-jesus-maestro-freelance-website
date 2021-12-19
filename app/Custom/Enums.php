<?php

namespace App\Custom;

class Enums{

  public static function make(){
    return new static();
  }

  public function sexo($int){
    switch ($int) {
      case 1:
        return "F";
        break;
      case 2:
        return "M";
        break;
      default:
        return "Otro";
        break;
    };
  }

  public function tipo_documento($int){
    switch ($int) {
      case 1:
        return "DNI";
        break;
      case 2:
        return "Carnet Extranjería";
        break;
      case 3:
        return "Pasaporte";
        break;
      default:
        return "Otro";
        break;
    };
  }

  public function parentesco($int){
    switch ($int) {
      case 1:
        return "Padre";
        break;
      case 2:
        return "Madre";
        break;
      default:
        return "Apoderado";
        break;
    };
  }



}
