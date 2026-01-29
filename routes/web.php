<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactoController;

// Página principal
Route::get('/', [HomeController::class, 'index'])->name('inicio');

// Otras páginas principales
Route::get('/nosotros', [HomeController::class, 'nosotros'])->name('nosotros');
Route::get('/admision', [HomeController::class, 'admision'])->name('admision');
Route::get('/reglamento/interno', [HomeController::class, 'reglamento_interno'])->name('reglamento.interno');
Route::get('/boletin', [HomeController::class, 'boletin'])->name('boletin.informativo');

Route::get('/temarios', [HomeController::class, 'temarios'])->name('temarios');
Route::get('/galerias', [HomeController::class, 'galerias'])->name('galerias');
Route::get('/lista-utiles', [HomeController::class, 'listaUtiles'])->name('lista_utiles');

Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto');
Route::post('/contacto/enviar', [ContactoController::class, 'enviar'])->name('contacto.enviar');
// Comunicados
Route::get('/comunicados', [HomeController::class, 'comunicados'])->name('comunicados');
Route::get('/comunicados/{id}', [HomeController::class, 'comunicadoDetalle'])->name('comunicados.detalle');


Route::get('/aula-virtual', [HomeController::class, 'aulaVirtual'])->name('aula_virtual');

// Reclamaciones
Route::get('/reclamaciones', [HomeController::class, 'reclamaciones'])->name('reclamaciones');

// Documentos
Route::get('/documentos/{tipo}', [HomeController::class, 'documentos'])->name('documentos.show');

// Ruta de fallback para SPA o página 404 personalizada
Route::fallback(function () {
    return view('errors.404');
});