<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Repositories\ImageRepositoryInterface;

use App\Models\Solicitud;


class ImageController extends BaseController
{
    protected $image;
    protected $listaLayoutFinal;
    public function __construct(ImageRepositoryInterface $image){
      parent::__construct();
      $this->image=$image;
      $this->listaLayoutFinal = $this->image->arr_obtener_imagen('layout','logos',"");
    }
    public function subirImagenLogo(Request $request){
      $file=$request->fileLogo;
      if (isset($file)) {
        $result=$this->image->upload_image('layout','logos',$file);
        return response()->json([
            'success' => true,
            'result' => $result
        ]);
      }
      else{
        return response()->json([
            'success' => false
        ]);
      }
    }
}
