<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Facultades;
use App\Http\Controllers\Programas;
use App\Http\Controllers\Profesores;
use App\Http\Controllers\Estudiantes;
use App\Http\Controllers\Calificaciones;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [HomeController::class, 'index']);

Route::get('/facultades/listado', [Facultades::class, 'index']) ->name('listadoFac');

Route::get('/facultades/registro', [Facultades::class, 'form_registro']);

Route::post('/facultades/registro', [Facultades::class, 'registrar']);

Route::get('/facultades/eliminar/{id}', [Facultades::class, 'eliminar']) ->name('eliminarFac');

Route::get('/programas/listado', [Programas::class, 'index']);

Route::get('/profesores/listado', [Profesores::class, 'index']);

Route::get('/estudiantes/listado', [Estudiantes::class, 'index']);

Route::get('/regnotas/listado', [Calificaciones::class, 'index']);





