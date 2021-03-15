<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreQuestionRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
          'nombre' => 'required',
          'correo' => 'required|email',
          'consulta' =>  'required',
          'g-recaptcha-response' => 'recaptcha',
        ];
    }
}
