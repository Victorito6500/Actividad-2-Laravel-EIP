@extends('layouts.app')
@section('content')

<div>
  <section class="mb-4">
    <a href="/libros" class="btn btn-primary">
      <i class="fa-solid fa-arrow-left me-2"></i>
      Volver
    </a>
  </section>

  <h1><q>{{ $libro->titulo }}</q></h1>

  <section class="mt-4 px-2 d-flex flex-column gap-4">
    <article>
      <h2 class="fs-5">ID</h2>
      <span class="text-secondary">{{ $libro->id }}</span>
    </article>
  
    <article>
      <h2 class="fs-5">Autor</h2>
      <span class="text-secondary">{{ $libro->autor }}</span>
    </article>
  
    <article>
      <h2 class="fs-5">Año publicación</h2>
      <span class="text-secondary">{{ $libro->anio_publicacion }}</span>
    </article>
  
    <article>
      <h2 class="fs-5">Género</h2>
      <span class="text-secondary">{{ $libro->genero }}</span>
    </article>
  
    <article>
      <h2 class="fs-5">Disponible</h2>
      <span class="text-secondary">@if ($libro->disponible == 1) Sí @else No @endif</span>
    </article>

    <article class="d-flex gap-2">
      <a href="/libros/form-editar/{{ $libro->id }}" class="btn btn-warning">
        <i class="fa-regular fa-pen-to-square me-2"></i>
        Editar
      </a>
      <form action="/libros/eliminar/{{ $libro->id }}" method="POST">
        @method("DELETE")
        @csrf
        <button type="submit" class="btn btn-danger">
          <i class="fa-regular fa-trash-can me-2"></i>
          Eliminar
        </button>
      </form>
    </article>
  </section>
</div>


@endsection