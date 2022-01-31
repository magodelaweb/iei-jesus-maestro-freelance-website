<?php
namespace App\Repositories;

use Config;
use Carbon\Carbon;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;
use IEI;
use DateTime;
use App\Repositories\FuncionesRepo;
use stdClass;

class ImageRepository implements ImageRepositoryInterface{

  protected $func;

	public function __construct(){
    $this->func=new FuncionesRepo();
  }

	public static function make(){
		return new static();
	}

  public function upload_image($disk,$category,$file){
    $hoy=Carbon::now();
    try {
      $path = Storage::disk($disk)->putFile('',$file);
      $size_=Storage::disk('layout')->size($path);
      if (isset($path)&&$path!=="") {
        $imgLayoutDb = new Image();
        $imgLayoutDb->categoria=$category;
        $imgLayoutDb->nombre=$path;
        $imgLayoutDb->estado="OK";
        $imgLayoutDb->ultimo_uso=$hoy;
        $imgLayoutDb->peso_bytes=$size_;
        $imgLayoutDb->descripcion="";
        $imgLayoutDb->save();
        return $imgLayoutDb;
      }
      else{
        return false;
      }
    } catch (\Exception $e) {
      return false;
    }
  }

	public function arr_obtener_imagen($disk,$category,$seleccionada){
    $fecha = new DateTime();
    $imgLayouts = Storage::disk($disk)->files();
    $imgLayoutDbs = Image::where('categoria',$category)->get();
    $imgLayoutDbNombres = $imgLayoutDbs->pluck("nombre")->all();
    $comparar=$this->func->compararlistas($imgLayoutDbNombres,$imgLayouts);
    $listaLayoutFinal = collect([]);
    foreach ($comparar->solo1 as $key => $value) {
      $imagen = $imgLayoutDbs->where('nombre',$value)->first();
      $imagen->estado="ERROR";
      $imagen->save();
    }
    foreach ($imgLayoutDbs as $key => $file) {
      if ($file->estado=="OK") {
        $file_wm=new stdClass();
        $file_wm->nombre=$file->nombre;
        if ($file->nombre==$seleccionada) {
          $file_wm->seleccionada=true;
        }
        else{
          $file_wm->seleccionada=false;
        }
        $file_wm->size=IEI::sizeToHuman($file->peso_bytes);
        $file_wm->last_update=$file->ultimo_uso->format('d/m/Y');
        if ($file_wm->seleccionada) {
          $listaLayoutFinal->prepend($file_wm);
        }
        else{
          if ($key==0) {
            $listaLayoutFinal->put(1,$file_wm);
          }
          else{
            $listaLayoutFinal->push($file_wm);
          }
        }
      }
    }
    // dd($listaLayoutFinal);
    foreach ($comparar->solo2 as $key => $value) {
      $size_=Storage::disk('layout')->size($value);
      $last_update_=Storage::disk('layout')->lastModified($value);
      $imagen=new Image();
      $imagen->nombre=$value;
      $imagen->categoria=$category;
      $imagen->descripcion="";
      $imagen->peso_bytes=$size_;
      $imagen->en_uso=0;
      $imagen->ultimo_uso=Carbon::createFromTimestamp($last_update_);
      $imagen->estado="OK";
      $imagen->save();

      $file_wm=new stdClass();
      $file_wm->nombre=$value;
      $file_wm->size=IEI::sizeToHuman($size_);
      $file_wm->last_update=$imagen->ultimo_uso->format('d/m/Y');
      $listaLayoutFinal->push($file_wm);
    }
    // dd($imgLayouts,$imgLayoutDbNombres,$comparar,$listaLayoutFinal);
		return $listaLayoutFinal;
	}

  public function eliminar_imagen($param){

		return false;
	}

}
