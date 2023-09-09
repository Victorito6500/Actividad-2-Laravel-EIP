@extends('layouts.app')
@section('content')

<div>
  <section class="mb-4">
    <a href="/prestamos" class="btn btn-primary">
      <i class="fa-solid fa-arrow-left me-2"></i>
      Volver
    </a>
  </section>

  <h1>Préstamo <span class="fst-italic">#{{ $prestamo->id }}</span></h1>

  <section class="mt-4 px-2 d-flex flex-column gap-4">
    <article>
      <h2 class="fs-5">Usuario</h2>
      <span class="text-secondary">{{ $prestamo->name }} <b class="fst-italic">#{{ $prestamo->user_id }}</b></span>
    </article>
  
    <article>
      <h2 class="fs-5">Libro</h2>
      <span class="text-secondary">{{ $prestamo->titulo }} <b class="fst-italic">#{{ $prestamo->libro_id }}</b></span>
    </article>
  
    <article>
      <h2 class="fs-5">Fecha préstamo</h2>
      <span class="text-secondary">{{ date('d-m-Y', strtotime($prestamo->fecha_prestamo)) }}</span>
    </article>
  
    <article>
      <h2 class="fs-5">Fecha devolución estimada</h2>
      <span class="text-secondary">{{ date('d-m-Y', strtotime($prestamo->fecha_devolucion_estimada)) }}</span>
    </article>

    @if ($prestamo->fecha_devolucion != null)
      <article>
        <h2 class="fs-5">Fecha devolución</h2>
        <span class="text-secondary">{{ date('d-m-Y', strtotime($prestamo->fecha_devolucion)) }}</span>
      </article>
    @endif
  
    <article>
      <h2 class="fs-5">Entregado</h2>
      <span class="text-secondary">@if ($prestamo->entregado == 1) Sí @else No @endif</span>
    </article>

    <article class="d-flex gap-2">
      <a href="/prestamos/form-editar/{{ $prestamo->id }}" class="btn btn-warning">
        <i class="fa-regular fa-pen-to-square me-2"></i>
        Editar
      </a>

      @if (!$prestamo->entregado)
        <form action="/prestamos/entregar/{{ $prestamo->id }}" method="POST">
          @method("PUT")
          @csrf
          <button type="submit" name="from" value="ver_detalle" class="btn btn-success">
            <i class="fa-regular fa-hand"></i>
            Entregar
          </button>
        </form>
      @endif
      
      <form action="/prestamos/eliminar/{{ $prestamo->id }}" method="POST">
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