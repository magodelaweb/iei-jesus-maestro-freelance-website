<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function home(){
      return view('home.welcome',[
        "menu"=>"home"
      ]);
    }
    public function infraestructura(){
      return view('home.infraestructura',[
        "menu"=>"infraestructura"
      ]);
    }
    public function horarios(){
      return view('home.horarios',[
        "menu"=>"horarios"
      ]);
    }
    public function propuesta(){
      return view('home.propuesta',[
        "menu"=>"propuesta"
      ]);
    }
    public function admision(){
      return view('home.admision',[
        "menu"=>"admision"
      ]);
    }
    public function noticias(){
      return view('home.noticias',[
        "menu"=>"noticias"
      ]);
    }
    public function contacto(){
      return view('home.contacto',[
        "menu"=>"contacto"
      ]);
    }
    public function reglamento_interno(){
      $pathToFile=public_path('files').'/reglamento_interno.pdf';
      return response()->file($pathToFile);
    }
}
