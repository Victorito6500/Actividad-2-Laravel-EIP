<?php

namespace App\Http\Controllers;

use App\Http\Requests\PrestamoRequest;
use App\Models\Libro;
use App\Models\Prestamo;
use App\Models\User;
use App\Rules\CheckLibro;
use Illuminate\Http\Request;

class PrestamoController extends Controller
{
  public function getAll(){
    $prestamos = Prestamo::select('prestamos.*', 'users.name', 'libros.titulo')
                         ->join('users', 'prestamos.user_id', '=', 'users.id')
                         ->join('libros', 'prestamos.libro_id', '=', 'libros.id')
                         ->get();
            
    return view('prestamos.prestamos-tabla', ['prestamos' => $prestamos]);
  }

  public function get($id){
    $prestamo = Prestamo::select('prestamos.*', 'users.name', 'libros.titulo')
                         ->where('prestamos.id', '=', $id)
                         ->join('users', 'prestamos.user_id', '=', 'users.id')
                         ->join('libros', 'prestamos.libro_id', '=', 'libros.id')
                         ->first();

    return view('prestamos.prestamos-detalle', ['prestamo' => $prestamo]);
  }

  public function searchByUser(Request $request){
    if (empty($request->busqueda)){
      return redirect('/prestamos');
    }

    $busqueda = '%' . $request->busqueda . '%';

    $users = User::where('name', 'like', $busqueda)->get();

    $users_id = [];

    foreach ($users as $user) {
      array_push($users_id, $user->id);
    }

    $prestamos = Prestamo::select('prestamos.*', 'users.name', 'libros.titulo')
                         ->whereIn('prestamos.user_id',  $users_id)
                         ->join('users', 'prestamos.user_id', '=', 'users.id')
                         ->join('libros', 'prestamos.libro_id', '=', 'libros.id')
                         ->get();

    return view('prestamos.prestamos-tabla', ['prestamos' => $prestamos, 'busqueda' => $request->busqueda]);
  }

  public function createForm(){
    $users = User::all();
    $libros = Libro::all();

    return view('prestamos.form-crear', ['users' => $users, 'libros' => $libros]);
  }

  public function create(PrestamoRequest $request){
    $checkLibro = $request->validate([
      'libro_id' => [new CheckLibro]
    ]);

    $prestamo = Prestamo::create([
      'user_id'                   => $request->user_id,
      'libro_id'                  => $request->libro_id,
      'fecha_prestamo'            => $request->fecha_prestamo,
      'fecha_devolucion_estimada' => $request->fecha_devolucion_estimada,
      'entregado'                 => $request->entregado
    ]);

    if (!$prestamo->entregado){
      $libro = Libro::find($request->libro_id);
      $libro->update([
        'disponible' => 0
      ]);
    }else{
      $prestamo->update([
        'fecha_devolucion' => date('Y-m-d')
      ]);
    }

    return redirect('/prestamos');
  }

  public function entregar($id, Request $request){
    $prestamo = Prestamo::find($id);
    $prestamo->update([
      'fecha_devolucion' => date('Y-m-d'),
      'entregado' => 1
    ]);

    $libro = Libro::find($prestamo->libro_id);
    $libro->update([
      'disponible' => 1
    ]);

    if ($request->from == 'ver_detalle'){
      return redirect('/prestamos/detalle/'.$id);
    }

    return redirect('/prestamos');
  }

  public function updateForm($id){
    $prestamo = Prestamo::find($id);
    $users = User::all();
    $libros = Libro::all();

    return view('prestamos.form-editar', ['prestamo' => $prestamo, 'users' => $users, 'libros' => $libros]);
  }

  public function update(PrestamoRequest $request){
    $prestamo = Prestamo::find($request->id);

    if ($request->libro_id != $prestamo->libro_id){
      $checkLibro = $request->validate([
        'libro_id' => [new CheckLibro]
      ]);

      $libro = Libro::find($prestamo->libro_id);
      $libro->update([
        'disponible' => 1
      ]);

      $libro = Libro::find($request->libro_id);
      $libro->update([
        'disponible' => 0
      ]);
    }

    $prestamo->update([
      'user_id'                   => $request->user_id,
      'libro_id'                  => $request->libro_id,
      'fecha_prestamo'            => $request->fecha_prestamo,
      'fecha_devolucion_estimada' => $request->fecha_devolucion_estimada,
      'entregado'                 => $request->entregado
    ]);

    if ($prestamo->entregado){
      $prestamo->update([
        'fecha_devolucion' => date('Y-m-d')
      ]);

      $libro = Libro::find($request->libro_id);
      $libro->update([
        'disponible' => 1
      ]);
    }

    return redirect('/prestamos');
  }

  public function delete($id){
    $prestamo = Prestamo::find($id);
    
    if(!$prestamo->entregado){
      $libro = Libro::find($prestamo->libro_id);
      $libro->update([
        'disponible' => 1
      ]);
    }

    $prestamo->delete();

    return redirect('/prestamos');
  }
}
