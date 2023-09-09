@extends('layouts.app')
@section('content')

<div>
  <form class="mb-4 d-flex gap-3" action="/libros" method="POST">
    @csrf
  
    <input style="width: 400px;" class="form-control" type="search" placeholder="Búsqueda por nombre..." name="busqueda">
    <button class="btn btn-outline-primary" type="submit">
      <i class="fa-solid fa-magnifying-glass me-2"></i>
      Buscar
    </button>
  </form>

  @isset($busqueda)
  <div class="mb-5">
    <span class="bg-body-secondary border border-success rounded-pill px-2 py-2">
      "{{ $busqueda }}"
      <a href="/libros" class="ms-2"><i class="fa-solid fa-xmark text-success"></i></a>
    </span>
  </div>
  @endisset
</div>

<div>
  <a href="/libros/form-crear" class="btn btn-outline-success">
    <i class="fa-solid fa-plus me-2"></i>
    Crear nuevo libro
  </a>
</div>

<div class="mt-4 overflow-hidden rounded-3">
  <table class="table table-striped table-hover mb-0">
    <thead>
      <tr class="table-success">
        <th class="text-center">Título</th>
        <th class="text-center">Disponible</th>
        <th class="text-center"></th>
      </tr>
    </thead>
    <tbody>
      @forelse ($libros as $libro)
      <tr>
        <td class="align-middle">{{ $libro->titulo }}</td>
        <td class="align-middle text-center">@if ($libro->disponible === 1) Sí @else No @endif</td>
        <td class="d-flex align-items-center justify-content-end gap-3">
          <a href="/libros/detalle/{{ $libro->id }}" class="btn btn-primary">
            <i class="fa-regular fa-eye me-2"></i>
            Ver detalles
          </a>
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
        </td>
      </tr>
      @empty
      <tr>
        <td colspan=7 class="text-center">No existe ningún libro</td>
      </tr>
      @endforelse
    </tbody>
  </table>
</div>
@endsection