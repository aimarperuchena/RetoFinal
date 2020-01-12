@extends('layouts.index')
@section('content')
<br><br><br><br><br>

<div class="container" style="height: 100vh;">
  <div class="jumbotron">
    <h1 class="display-4">Reserva realizada con éxito!</h1>
    <p class="lead">Enorabuena su reserva se realizo correctamente, para la fecha {{$fecha}}, para la mesa {{$mesa}}, para {{$personas}} registradas.</p>
    <hr class="my-4">
    <p>Volver al listado de las Sociedades</p>
    <a class="btn btn-primary btn-lg" href="{{ route('usuario.listado') }}" role="button">Volver</a>
  </div>
</div>

@endsection
