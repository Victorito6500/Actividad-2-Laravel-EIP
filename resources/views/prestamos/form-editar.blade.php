@extends('layouts.app')
@section('content')

<div class="d-flex justify-content-center">
  <div class="w-50 bg-body-secondary p-5 rounded-4 border border-success-subtle">
    <section class="mb-4">
      <a href="/prestamos" class="link-secondary link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">
        <i class="fa-solid fa-arrow-left me-2"></i>
        Volver
      </a>
    </section>

    <h1 class="mb-5">Editar prestamo</h1>
    <form action="/prestamos/editar" method="POST">
      @method("PUT")
      @csrf

      <input type="hidden" name="id" value="{{ $prestamo->id }}">

      <div class="mb-3">
        <label for="user_id" class="form-label">Usuario</label>
        <select class="form-select @error('user_id') is-invalid @enderror"
                id="user_id" 
                name="user_id">
          @foreach ($users as $user)
            <option @if ($prestamo->user_id == $user->id) selected @endif
                    value="{{ $user->id }}">
              {{ $user->name }}
            </option>
          @endforeach
        </select>

        @error('user_id')
          <div class="mt-3 alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="libro_id" class="form-label">Libro</label>
        <select class="form-select @error('libro_id') is-invalid @enderror"
                id="libro_id" 
                name="libro_id">
          @foreach ($libros as $libro)
            <option @if ($prestamo->libro_id == $libro->id) selected @endif
                    value="{{ $libro->id }}">
              {{ $libro->titulo }}
              @if ($libro->id != $prestamo->libro_id && !$libro->disponible)
                - No disponible
              @endif
            </option>
          @endforeach
        </select>
               
        @error('libro_id')
          <div class="mt-3 alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="fecha_prestamo" class="form-label">Fecha préstamo</label>
        <input type="date"
               class="form-control @error('fecha_prestamo') is-invalid @enderror"
               name="fecha_prestamo"
               id="fecha_prestamo"
               value="{{ $prestamo->fecha_prestamo }}">

        @error('fecha_prestamo')
          <div class="mt-3 alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="mb-3">
        <label for="fecha_devolucion_estimada" class="form-label">Fecha devolución estimada</label>
        <input type="date"
               class="form-control @error('fecha_devolucion_estimada') is-invalid @enderror"
               name="fecha_devolucion_estimada"
               id="fecha_devolucion_estimada"
               value="{{ $prestamo->fecha_devolucion_estimada }}">

        @error('fecha_devolucion_estimada')
          <div class="mt-3 alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="mb-3">
        <span>Entregado:</span>
        <div class="mt-2 form-check">
          <input class="form-check-input @error('entregado') is-invalid @enderror"
                 type="radio"
                 name="entregado"
                 id="entregado-si"
                 value="1"
                 @if($prestamo->entregado) checked @endif>
          <label class="form-check-label" for="entregado-si">Sí</label>
        </div>
        <div class="form-check">
          <input class="form-check-input @error('entregado') is-invalid @enderror"
                 type="radio"
                 name="entregado"
                 id="entregado-no"
                 value="0"
                 @if(!$prestamo->entregado) checked @endif>
          <label class="form-check-label" for="entregado-no">No</label>
        </div>

        @error('entregado')
          <div class="mt-3 alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      <button type="submit" class="btn btn-success mt-3">Editar</button>
    </form>
  </div>
</div>

@endsection