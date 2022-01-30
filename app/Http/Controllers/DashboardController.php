<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Web;
use App\Repositories\ImageRepositoryInterface;
use IEI;

class DashboardController extends BaseController
{
    protected $image;
    public function __construct(ImageRepositoryInterface $image){
      parent::__construct();
      $this->image=$image;
    }
    public function index(){
      $imgSeleccionada=IEI::ctc($this->web,'logo');
      $listaLayoutFinal = $this->image->arr_obtener_imagen('layout','logos',$imgSeleccionada);
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
