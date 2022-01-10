<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\StoreQuestionRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactoWeb;
use App\Models\Solicitud;
use App\Models\Apoderado;
use App\Models\Dependiente;
use App\Custom\Enums;
use App\Custom\Enums\Estado_Solicitud;
use App\Custom\Helpers;
use Carbon\Carbon;
use Config;

class HomeController extends BaseController
{
    public function home(){
      return view('home.welcome',[
        "menu"=>"home",
        "web"=>$this->web
      ]);
    }
    public function infraestructura(){
      return view('home.infraestructura',[
        "menu"=>"infraestructura",
        "web"=>$this->web
      ]);
    }
    public function horarios(){
      return view('home.horarios',[
        "menu"=>"horarios",
        "web"=>$this->web
      ]);
    }
    public function propuesta(){
      return view('home.propuesta',[
        "menu"=>"propuesta",
        "web"=>$this->web
      ]);
    }
    public function admision(){
      return view('home.admision',[
        "menu"=>"admision",
        "web"=>$this->web
      ]);
    }
    public function solicitud(){
      // $solicitud=Solicitud::find(1);
      // $apoderado=Apoderado::find(1);
      // $dependiente=Dependiente::find(1);
      // dd($dependiente->apoderado->solicitud);
      // dd("test");
      return view('home.solicitud',[
        "menu"=>"admision",
        "noCTA"=>true,
        "web"=>$this->web
      ]);
    }
    public function solicitud_store(Request $request){
      $hoy=Carbon::now();
      $enum=Enums::make();
      $helper=Helpers::make();

      $apoderado=(object)[
        "documento"=>$request->num_doc_0,
        "tipo_documento"=>$enum->tipo_documento($request->doc_0),
        "apellido_paterno"=>mb_strtoupper($request->ape_pat_0),
        "apellido_materno"=>mb_strtoupper($request->ape_mat_0),
        "nombres"=>mb_strtoupper($request->nom_0),
        "correo_electronico"=>$request->email_0,
        "parentesco"=>$enum->parentesco($request->parentesco_0),
        "telefono_fijo"=>$request->fijo_0,
        "celular"=>$request->cel_0
      ];
      //Apoderado Registrado:
      $apoderado_db=Apoderado::where('tipo_documento',$apoderado->tipo_documento)
      ->where('documento',$apoderado->documento)->first();
      if (!isset($apoderado_db)) {
        $apoderado_db=new Apoderado((array)$apoderado);
        $apoderado_db->save();
      }
      // dd($apoderado,$apoderado_db);
      // dd($request->all());
      $num_doc_1_=explode(":|°|:",$request->num_doc_1_);
      $doc_1_=explode(":|°|:",$request->doc_1_);
      $ape_pat_1_=explode(":|°|:",$request->ape_pat_1_);
      $ape_mat_1_=explode(":|°|:",$request->ape_mat_1_);
      $nom_1_=explode(":|°|:",$request->nom_1_);
      $grado_1_=explode(":|°|:",$request->grado_1_);
      $fec_nac_1_=explode(":|°|:",$request->fec_nac_1_);
      $sex_1_=explode(":|°|:",$request->sex_1_);
      $dependientes=[];
      foreach ($num_doc_1_ as $key => $nd1) {
        $d1=isset($doc_1_[$key])?$doc_1_[$key]:"";
        $ap1=isset($ape_pat_1_[$key])?mb_strtoupper($ape_pat_1_[$key]):"";
        $am1=isset($ape_mat_1_[$key])?mb_strtoupper($ape_mat_1_[$key]):"";
        $n1=isset($nom_1_[$key])?mb_strtoupper($nom_1_[$key]):"";
        $g1=isset($grado_1_[$key])?$grado_1_[$key]:"";
        $f1=isset($fec_nac_1_[$key])?$fec_nac_1_[$key]:"";
        $s1=isset($sex_1_[$key])?$sex_1_[$key]:"";
        $dependiente=(object)[
          "apoderado_id"=>$apoderado_db->id,
          "documento"=>$nd1,
          "tipo_documento"=>$enum->tipo_documento($d1),
          "apellido_paterno"=>$ap1,
          "apellido_materno"=>$am1,
          "nombres"=>$n1,
          "grado"=>$g1,
          "fecha_nacimiento"=>$helper->fecha($f1),
          "sexo"=>$enum->sexo($s1)
        ];
        $dependiente_db=Dependiente::where('tipo_documento',$dependiente->tipo_documento)
        ->where('documento',$dependiente->documento)->first();
        if (!isset($dependiente_db)) {
          $dependiente_db=new Dependiente((array)$dependiente);
          $dependiente_db->apoderado_id=$apoderado_db->id;
          $dependiente_db->save();
        }
        // dd($dependiente);
        // dd($key,$nd1);
      }
      // dd($num_doc_1_,$request->all());die;
      $solicitud=new Solicitud;
      $solicitud->fecha=$hoy;
      $solicitud->estado=Estado_Solicitud::PENDIENTE;
      $solicitud->apoderado_id=$apoderado_db->id;
      $solicitud->save();
      //Enviar correo.
      return redirect()->route('home')
        ->with('status', '¡Hemos registrado su solicitud! En los próximos días nos estaremos comunicando con usted.');
    }
    public function noticias(){
      return view('home.noticias',[
        "menu"=>"noticias",
        "web"=>$this->web
      ]);
    }
    public function noticias_detalle($slug){
      return view('home.noticias_detalle',[
        "menu"=>"noticias",
        "web"=>$this->web
      ]);
    }
    public function contacto(){
      return view('home.contacto',[
        "menu"=>"contacto",
        "web"=>$this->web
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
