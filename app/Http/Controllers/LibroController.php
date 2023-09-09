<?php

namespace App\Http\Controllers;

use App\Http\Requests\LibroRequest;
use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function getAll(){
      $libros = Libro::all();

      return view('libros.libros-tabla', ['libros' => $libros]);
    }

    public function get($id){
      $libro = Libro::find($id);
      
      return view('libros.libros-detalle', ['libro' => $libro]);
    }

    public function searchByTitle(Request $request){
      if (empty($request->busqueda)){
        return redirect('/libros');
      }

      $busqueda = '%' . $request->busqueda . '%';

      $libros = Libro::where('titulo', 'like', $busqueda)->get();

      return view('libros.libros-tabla', ['libros' => $libros, 'busqueda' => $request->busqueda]);
    }

    public function createForm(){
      return view('libros.form-crear');
    }

    public function create(LibroRequest $request){
      $libro = Libro::create([
        'titulo'           => $request->titulo,
        'autor'            => $request->autor,
        'anio_publicacion' => $request->anio_publicacion,
        'genero'           => $request->genero,
        'disponible'       => $request->disponible
      ]);

      return redirect('/libros');
    }

    public function updateForm($id){
      $libro = Libro::find($id);

      return view('libros.form-editar', ['libro' => $libro]);
    }

    public function update(LibroRequest $request){
      $libro = Libro::find($request->id);

      $libro->update([
        'titulo'           => $request->titulo,
        'autor'            => $request->autor,
        'anio_publicacion' => $request->anio_publicacion,
        'genero'           => $request->genero,
        'disponible'       => $request->disponible
      ]);

      return redirect('/libros');
    }

    public function delete($id){
      $libro = Libro::destroy($id);

      return redirect('/libros');
    }
}
