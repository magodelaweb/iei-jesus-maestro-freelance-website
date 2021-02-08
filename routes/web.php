<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[HomeController::class, 'home'])->name("home");
Route::get('/infraestructura',[HomeController::class, 'infraestructura'])->name("infraestructura");
Route::get('/horarios',[HomeController::class, 'horarios'])->name("horarios");
Route::get('/propuesta-pedagogica',[HomeController::class, 'propuesta'])->name("propuesta");
Route::get('/admision',[HomeController::class, 'admision'])->name("admision");
Route::get('/noticias',[HomeController::class, 'noticias'])->name("noticias");
Route::get('/contacto',[HomeController::class, 'contacto'])->name("contacto");
