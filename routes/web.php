<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\claseController;
use App\Http\Controllers\tareaController;
use App\Http\Controllers\LtiController;


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

Route::get('/', function () {return view('index');});
Route::get('/login',[loginController::class,'inicioSesion'])->name('login');
Route::get('/menuEstudiante',[loginController::class,'menuEstudiante'])->name('menuEstudiante');
Route::get('/menuProfesor',[loginController::class,'menuProfesor'])->name('menuProfesor');
Route::get('/login',[loginController::class,'inicioSesion'])->name('login');
Route::post('/login',[loginController::class,'login'])->name('login');
Route::post('/crearClase',[claseController::class,'create'])->name('crearClase');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/unirseClase',[claseController::class,'unirse'])->name('unirseClase');
Route::get('/clase/{id}',[claseController::class,'clase'])->name('clase');
Route::get('/tarea/{id}',[tareaController::class,'tarea'])->name('tarea');
Route::post('/crearTarea',[tareaController::class,'crear'])->name('crearTarea');
Route::post('/lti-launch', [LtiController::class, 'launch']);
