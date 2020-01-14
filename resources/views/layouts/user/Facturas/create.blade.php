@extends('layouts.app')
@section('content')

<br><br><br><br>
<div class="container text-center">
  <h1>Seleccione la Reserva</h1>
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Sociedad</th>
        <th scope="col">Tipo</th>
        <th scope="col">Fecha</th>
        <th scope="col">#</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach($reservas as $reserva)
          <tr>
            <th scope="row">{{$reserva->id}}</th>
            <td>{{$reserva->sociedad->nombre}}</td>
            <td>{{$reserva->tipo->nombre}}</td>
            <td>{{$reserva->fecha}}</td>
            <td><a class="badge badge-info badge-pill text-white ml-2" href="{{ route('factura.store',$reserva->id) }}"><i class="far fa-hand-pointer"></i></a></td>
          </tr>
        @endforeach
      </tr>
    </tbody>
  </table>
</div>
@endsection
