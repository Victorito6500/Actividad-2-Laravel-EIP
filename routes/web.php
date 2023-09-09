<?php

use App\Http\Controllers\LibroController;
use App\Http\Controllers\PrestamoController;
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
    return view('home');
});

// /libros
Route::get('/libros', [LibroController::class, 'getAll']);
Route::get('/libros/detalle/{id}', [LibroController::class, 'get']);
Route::post('/libros', [LibroController::class, 'searchByTitle']);
Route::get('/libros/form-crear', [LibroController::class, 'createForm']);
Route::post('/libros/crear', [LibroController::class, 'create']);
Route::get('/libros/form-editar/{id}', [LibroController::class, 'updateForm']);
Route::put('/libros/editar', [LibroController::class, 'update']);
Route::delete('/libros/eliminar/{id}', [LibroController::class, 'delete']);

// /prestamos
Route::get('/prestamos', [PrestamoController::class, 'getAll']);
Route::get('/prestamos/detalle/{id}', [PrestamoController::class, 'get']);
Route::post('/prestamos', [PrestamoController::class, 'searchByUser']);
Route::get('/prestamos/form-crear', [PrestamoController::class, 'createForm']);
Route::post('/prestamos/crear', [PrestamoController::class, 'create']);
Route::get('/prestamos/form-editar/{id}', [PrestamoController::class, 'updateForm']);
Route::put('/prestamos/editar', [PrestamoController::class, 'update']);
Route::put('/prestamos/entregar/{id}', [PrestamoController::class, 'entregar']);
Route::delete('/prestamos/eliminar/{id}', [PrestamoController::class, 'delete']);