@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-12 text-center pt-5">
        <h1 class="display-one mt-5">{{ config('app.name') }}</h1>
        <p>Aquí podrás crear, ver, editar y eliminar libros y préstamos</p>
        <div>
          <a href="/libros" class="btn btn-outline-success">Ver libros</a>
          <a href="/prestamos" class="btn btn-outline-success">Ver préstamos</a>
        </div>
    </div>
</div>
@endsection