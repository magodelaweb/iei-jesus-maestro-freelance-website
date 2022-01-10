<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends BaseController
{
    public function index(){
      return view('dash.dashboard',[
        "menu"=>"dashboard",
        "web"=>$this->web
      ]);
    }
}
