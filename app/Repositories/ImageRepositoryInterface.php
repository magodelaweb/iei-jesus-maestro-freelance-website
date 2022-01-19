<?php
namespace App\Repositories;

interface ImageRepositoryInterface{

	public function arr_obtener_imagen($disk,$category);
  public function eliminar_imagen($param);

}
