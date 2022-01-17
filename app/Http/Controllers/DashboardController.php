<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Web;
use Illuminate\Support\Facades\Storage;
use stdClass;
use IEI;
use DateTime;

class DashboardController extends BaseController
{
    public function index(){
      $fecha = new DateTime();
      $imgLayouts = Storage::disk('layout')->files();
      $listaLayoutFinal = collect([]);
      foreach ($imgLayouts as $key => $file) {
        $size_=Storage::disk('layout')->size($file);
        $last_update_=Storage::disk('layout')->lastModified($file);
        $fecha->setTimestamp($last_update_);
        $file_wm=new stdClass();
        $file_wm->nombre=$file;
        $file_wm->size=IEI::sizeToHuman($size_);
        $file_wm->last_update=$fecha->format('d/m/Y');
        $listaLayoutFinal->push($file_wm);
      }
      // dd($listaLayoutFinal);
      return view('dash.dashboard',[
        "menu"=>"dashboard",
        "web"=>$this->web,
        "listaLayoutFinal"=>$listaLayoutFinal
      ]);
    }
    public function enviaParamWeb(Request $request){
      $web=Web::where('clave',$request->campo)->first();
      if (isset($web)) {
        $web->valor=$request->valor;
        $web->save();
        return true;
      }
      else{
        return false;
      }
    }
}
