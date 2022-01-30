<?php
namespace App\Repositories;

interface ImageRepositoryInterface{

	public function arr_obtener_imagen($disk,$category,$seleccionada);
  public function eliminar_imagen($param);
	public function upload_image($disk,$category,$file);
}
