<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Web;
use Carbon\Carbon;
use Config;

class BaseController extends Controller
{
    protected $web;

    public function __construct(){
      $this->web=Web::all();
    }
}
