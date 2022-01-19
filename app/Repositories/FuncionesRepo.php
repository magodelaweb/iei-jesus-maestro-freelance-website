<?php
namespace App\Repositories;

class FuncionesRepo {

	public function __construct(){
  }

	public static function make(){
		return new static();
	}

  public function compararlistas($lista1,$lista2){
    $solo1=collect([]);
    $ambos=collect([]);
    $solo2=collect([]);
    foreach ($lista1 as $key => $value) {
      $coll2=collect($lista2);
      if ($coll2->contains($value)) {
        $ambos->push($value);
      }
      else{
        $solo1->push($value);
      }
    }
    foreach ($lista2 as $key => $value) {
      $coll1=collect($lista1);
      if (!$coll1->contains($value)) {
        $solo2->push($value);
      }
    }
		return (object)[
      "solo1"=>$solo1->all(),
      "ambos"=>$ambos->all(),
      "solo2"=>$solo2->all()
    ];
	}

}
