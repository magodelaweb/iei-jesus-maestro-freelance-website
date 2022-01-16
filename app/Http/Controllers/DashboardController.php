<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Web;


class DashboardController extends BaseController
{
    public function index(){
      return view('dash.dashboard',[
        "menu"=>"dashboard",
        "web"=>$this->web
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
