@extends('layouts.app')
@section('content')

<div class="d-flex justify-content-center">
  <div class="w-50 bg-body-secondary p-5 rounded-4 border border-success-subtle">
    <section class="mb-4">
      <a href="/libros" class="link-secondary link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">
        <i class="fa-solid fa-arrow-left me-2"></i>
        Volver
      </a>
    </section>

    <h1 class="mb-5">Crear nuevo libro</h1>
    <form action="/libros/crear" method="POST">
      @csrf

      <div class="mb-3">
        <label for="titulo" class="form-label">Título</label>
        <input type="text" 
               class="form-control @error('titulo') is-invalid @enderror"
               name="titulo"
               id="titulo">

        @error('titulo')
          <div class="mt-3 alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="autor" class="form-label">Autor</label>
        <input type="text"
               class="form-control @error('autor') is-invalid @enderror"
               name="autor"
               id="autor">
               
        @error('autor')
          <div class="mt-3 alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="anio_publicacion" class="form-label">Año publicación</label>
        <input type="text"
               class="form-control @error('anio_publicacion') is-invalid @enderror"
               name="anio_publicacion"
               id="anio_publicacion">

        @error('anio_publicacion')
          <div class="mt-3 alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="genero" class="form-label">Género</label>
        <input type="text"
               class="form-control @error('genero') is-invalid @enderror"
               name="genero"
               id="genero">

        @error('genero')
          <div class="mt-3 alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="mb-3">
        <span>Disponible:</span>
        <div class="mt-2 form-check">
          <input class="form-check-input @error('disponible') is-invalid @enderror"
                 type="radio"
                 name="disponible"
                 id="disponible-si"
                 value="1" checked>
          <label class="form-check-label" for="disponible-si">Sí</label>
        </div>
        <div class="form-check">
          <input class="form-check-input @error('disponible') is-invalid @enderror"
                 type="radio"
                 name="disponible"
                 id="disponible-no"
                 value="0">
          <label class="form-check-label" for="disponible-no">No</label>
        </div>

        @error('disponible')
          <div class="mt-3 alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      <button type="submit" class="btn btn-success mt-3">Crear</button>
    </form>
  </div>
</div>

@endsection