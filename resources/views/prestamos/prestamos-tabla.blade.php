@extends('layouts.app')
@section('content')

<div>
  <form class="mb-4 d-flex gap-3" action="/prestamos" method="POST">
    @csrf
  
    <input style="width: 400px;" class="form-control" type="search" placeholder="Búsqueda por usuario..." name="busqueda">
    <button class="btn btn-outline-primary" type="submit">
      <i class="fa-solid fa-magnifying-glass me-2"></i>
      Buscar
    </button>
  </form>

  @isset($busqueda)
  <div class="mb-5">
    <span class="bg-body-secondary border border-success rounded-pill px-2 py-2">
      "{{ $busqueda }}"
      <a href="/prestamos" class="ms-2"><i class="fa-solid fa-xmark text-success"></i></a>
    </span>
  </div>
  @endisset
</div>

<div>
  <a href="/prestamos/form-crear" class="btn btn-outline-success">
    <i class="fa-solid fa-plus me-2"></i>
    Crear nuevo préstamo
  </a>
</div>

<div class="mt-4 overflow-hidden rounded-3">
  <table class="table table-striped table-hover mb-0">
    <thead>
      <tr class="table-success">
        <th class="text-center">Usuario</th>
        <th class="text-center">Libro</th>
        <th class="text-center">Fecha Préstamo</th>
        <th class="text-center"></th>
      </tr>
    </thead>
    <tbody>
      @forelse ($prestamos as $prestamo)
      <tr>
        <td class="align-middle">{{ $prestamo->name }}</td>
        <td class="align-middle">{{ $prestamo->titulo }}</td>
        <td class="text-center align-middle">{{ date('d-m-Y', strtotime($prestamo->fecha_prestamo)) }}</td>
        <td class="d-flex align-items-center justify-content-end gap-3">
          @if ($prestamo->entregado)
            <span>Entregado</span>
          @else
            <a href="/prestamos/form-editar/{{ $prestamo->id }}" class="btn btn-warning">
              <i class="fa-regular fa-pen-to-square me-2"></i>
              Editar
            </a>

            <form action="/prestamos/entregar/{{ $prestamo->id }}" method="POST">
              @method("PUT")
              @csrf
              <button type="submit" class="btn btn-success">
                <i class="fa-regular fa-hand"></i>
                Entregar
              </button>
            </form>
          @endif

          <a href="/prestamos/detalle/{{ $prestamo->id }}" class="btn btn-primary">
            <i class="fa-regular fa-eye me-2"></i>
            Ver detalles
          </a>
          
          <form action="/prestamos/eliminar/{{ $prestamo->id }}" method="POST">
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
        <td colspan=7 class="text-center">No existe ningún préstamo</td>
      </tr>
      @endforelse
    </tbody>
  </table>
</div>
@endsection