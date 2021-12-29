<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Solicitud;


class SolicitudesController extends Controller
{
    public function index(){
      $solicitudes=Solicitud::all();
      return view('dash.solicitudes',[
        "menu"=>"solicitudes",
        "includeNavAdmin"=>true,
        "solicitudes"=>$solicitudes
      ]);
    }
}
