<?php

use App\Http\Controllers\LibrosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


route::get('/libros/crear', [LibrosController::class, 'crear'])->name('libros.crear');

route::post('/libros/store', [LibrosController::class, 'store'])->name('libros.store');

route::get('/libros/leer', [LibrosController::class, 'leer'])->name('libros.leer');

route::put('/libros/{libro}', [LibrosController::class, 'update'])->name('libros.update');



route::get('/libros/eliminar', [LibrosController::class, 'eliminar'])->name('libros.eliminar');
route::post('/libros/destroy', [LibrosController::class, 'destroy'])->name('libros.destroy');