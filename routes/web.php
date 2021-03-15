<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\Auth\LoginController;
// use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetController;

use App\Http\Controllers\DashboardController;

Route::get('/login', [LoginController::class, 'login'])->name('login');
// Route::get('/register', [RegisterController::class, 'register'])->name('register');
// Route::post('/registrate', [RegisterController::class, 'registrate'])->name('registrate');
Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/logout', [LoginController::class, 'logout'])->name('cerrar_sesion');
Route::get('/forgot-password', [ResetController::class, 'request'])->name('password.request');
Route::post('/forgot-password', [ResetController::class, 'email'])->name('password.email');
Route::get('/reset-password/{token}', [ResetController::class, 'reset'])->name('password.reset');
Route::post('/reset-password', [ResetController::class, 'update'])->name('password.update');

Route::get('/',[HomeController::class, 'home'])->name("home");
Route::get('/infraestructura',[HomeController::class, 'infraestructura'])->name("infraestructura");
Route::get('/horarios',[HomeController::class, 'horarios'])->name("horarios");
Route::get('/propuesta-pedagogica',[HomeController::class, 'propuesta'])->name("propuesta");
Route::get('/admision',[HomeController::class, 'admision'])->name("admision");
Route::get('/noticias',[HomeController::class, 'noticias'])->name("noticias");
Route::get('/contacto',[HomeController::class, 'contacto'])->name("contacto");
Route::post('/contacto-store',[HomeController::class, 'contacto_store'])->name("contacto_store");
Route::get('/reglamento-interno',[HomeController::class, 'reglamento_interno'])->name("reglamento_interno");

Route::middleware(['auth'])->group(function (){
  Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
  Route::get('/admin/infraestructura',[HomeController::class, 'infraestructura'])->name("admin.infraestructura");
  Route::get('/admin/propuesta-pedagogica',[HomeController::class, 'propuesta'])->name("admin.propuesta");
  Route::get('/admin/admision',[HomeController::class, 'admision'])->name("admin.admision");
  Route::get('/admin/noticias',[HomeController::class, 'noticias'])->name("admin.noticias");
  Route::get('/admin/contacto',[HomeController::class, 'contacto'])->name("admin.contacto");
});
