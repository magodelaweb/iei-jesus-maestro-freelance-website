<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\StoreQuestionRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactoWeb;
use Config;

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
        "menu"=>"admision",
        "noCTA"=>true
      ]);
    }
    public function admision_store(Request $request){
      $num_doc_1_=explode(":|°|:",$request->num_doc_1_);
      dd($num_doc_1_,$request->all());die;
    }
    public function noticias(){
      return view('home.noticias',[
        "menu"=>"noticias"
      ]);
    }
    public function noticias_detalle($slug){
      return view('home.noticias_detalle',[
        "menu"=>"noticias"
      ]);
    }
    public function contacto(){
      return view('home.contacto',[
        "menu"=>"contacto"
      ]);
    }
    public function contacto_store(StoreQuestionRequest $request){
      $name = $request->nombre;
      $email = $request->correo;
      $phone = $request->telefono;
      $question = $request->consulta;
      $mailContacto=(object)[
        "name" => $name,
        "email" => $email,
        "phone" => $phone,
        "question" => $question
      ];
      Mail::to(Config::get('mail.to_iei'))
      ->send(new ContactoWeb($mailContacto));
      ///Configurar redirect to with msj
      return redirect()->route('contacto')
        ->with('status', '¡Su mensaje fue enviado correctamente, pronto estaremos respondiéndole!');
      //dd($request);die;
      // return redirect->route('/');
    }
    public function reglamento_interno(){
      $pathToFile=public_path('files').'/reglamento_interno.pdf';
      return response()->file($pathToFile);
    }
}
