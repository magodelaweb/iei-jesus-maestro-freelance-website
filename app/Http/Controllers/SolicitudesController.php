<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Solicitud;


class SolicitudesController extends Controller
{
    public function index(){
      $solicitudes=Solicitud::with('apoderado.dependientes')->get();
      // dd($solicitudes);
      return view('dash.solicitudes',[
        "menu"=>"solicitudes",
        "includeNavAdmin"=>true,
        "solicitudes"=>$solicitudes
      ]);
    }
    public function detalle($id){
      // dd($id);
      $solicitud=Solicitud::where("id",$id)
      ->with('apoderado.dependientes')->first();
      return view('dash.solicitudes_detalle',[
        "menu"=>"solicitudes",
        "includeNavAdmin"=>true,
        "registro"=>$solicitud
      ]);
    }
}
