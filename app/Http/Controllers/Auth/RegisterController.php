<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\BaseController;
use App\Models\User;

class RegisterController extends BaseController
{
  public function __construct()
  {
    parent::__construct();
    $this->middleware('guest');
  }
  public function register(){
    return view('auth.register',["base"=>true,"web"=>$this->web]);
  }
  public function registrate(Request $request){
    try {
      $user=User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
      ]);
    } catch (\Exception $e) {
      $errorInfo=$e->errorInfo;
      $code=$errorInfo[0];
      $subCode=$errorInfo[1];
      $mensaje=$errorInfo[2];
      //dd($code,$subCode);die;
      if ($code=="23000" && $subCode==1062) {
        return back()->withErrors([
            'email' => 'Este correo ha sido registrado anteriormente.',
        ])->withInput($request->except('password'));
      }
      return back()->withErrors([
          'email' => $mensaje,
      ])->withInput($request->except('password'));
    }
    finally{
      if (isset($user)) {
        Auth::login($user);
        $request->session()->regenerate();
        return redirect()->intended('dashboard');
      }
    }
    return back()->withErrors([
        'email' => 'Error de registro.',
    ])->withInput($request->except('password'));
  }
}
