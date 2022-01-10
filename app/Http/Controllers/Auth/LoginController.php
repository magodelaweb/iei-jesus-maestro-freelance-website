<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\BaseController;
use App\Models\User;

class LoginController extends BaseController
{
    public function __construct()
    {
      parent::__construct();
      $this->middleware('guest', ['except' => [
            'logout'
        ]]);
    }
    public function login(){
      // dd($this->web);
      return view('auth.login',["base"=>true,"web"=>$this->web]);
    }
    public function authenticate(Request $request)
    {
        $remember=isset($request->remember);
        $credentials = [
          'email' => $request->email,
          'password' => $request->password
        ];
        // $this->comprobar_credenciales($credentials);
        // dd(Auth::attempt($credentials, $remember));
        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }
        return back()->withErrors([
            'email' => 'Error de autenticación.',
        ])->withInput($request->except('password'));
    }
    public function logout(Request $request)
    {
        //dd("llego al logout");die;
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
    protected function comprobar_credenciales($credenciales){
      $user=User::where("email",$credenciales["email"])->first();
      if (isset($user)) {
        $result=Hash::check($credenciales["password"], $user->password);
        dd($result,$credenciales["password"], $user->password);
      }
    }
}
