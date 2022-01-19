<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Repositories\ImageRepositoryInterface;

use App\Models\Solicitud;


class SolicitudesController extends BaseController
{
    protected $image;
    protected $listaLayoutFinal;
    public function __construct(ImageRepositoryInterface $image){
      parent::__construct();
      $this->image=$image;
      $this->listaLayoutFinal = $this->image->arr_obtener_imagen('layout','logos');
    }
    public function index(){
      $solicitudes=Solicitud::with('apoderado.dependientes')->get();
      // dd($solicitudes);
      return view('dash.solicitudes',[
        "menu"=>"solicitudes",
        "includeNavAdmin"=>true,
        "solicitudes"=>$solicitudes,
        "listaLayoutFinal"=>$this->listaLayoutFinal
      ]);
    }
    public function detalle($id){
      // dd($id);
      $solicitud=Solicitud::where("id",$id)
      ->with('apoderado.dependientes')->first();
      return view('dash.solicitudes_detalle',[
        "menu"=>"solicitudes",
        "includeNavAdmin"=>true,
        "registro"=>$solicitud,
        "listaLayoutFinal"=>$this->listaLayoutFinal
      ]);
    }
}
