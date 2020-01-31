@extends('layouts.app')
@section('content')

<br><br><br><br>
<div class="container text-center">
  <h1 class="mb-5">Todas sus Reservas</h1>
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">ID</th>
        <th scope="col">Fecha</th>
        <th scope="col">Tipo</th>
        <th scope="col">Sociedad</th>
        <th scope="col">Info</th>
        <th scope="col">Editar</th>
        <th scope="col">Eliminar</th>
      </tr>
    </thead>
    @if(count($reservas) > 0)
      @foreach($reservas as $reserva)
        <tbody>
          <tr>
            <th scope="row">#</th>
            <td>{{$reserva -> id}}</td>
            <td>{{$reserva->fecha}}</td>
            <td>{{$reserva->tipo->nombre}}</td>
            <td>{{$reserva->sociedad->nombre}}</td>
            <td><a class="badge badge-info badge-pill text-white ml-2" href="{{ route('reserva.show',$reserva->id) }}"><i class="fas fa-eye"></i></a></td>
            @if (!$reserva->factura)
              <td><a class="badge badge-info badge-pill text-white ml-2" href="{{ route('reserva.edit',$reserva->id) }}"><i class="fas fa-pencil-alt"></i></a></td>
            @else
              <td></td>
            @endif
            <td><a class="badge badge-info badge-pill text-white ml-2" href="{{ route('reserva.delete',$reserva->id) }}"><i class="fas fa-minus-circle"></i></i></a></td>
          </tr>
        </tbody>
      @endforeach
    </table>
    @else
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Error</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>{{$reserva -> id}}</td>
        </tr>
      </tbody>
    </table>
    <a class="btn btn-primary btn-lg" href="{{ route('usuario.listado') }}" role="button">Listado Sociedades</a>
    @endif
</div>
@endsection
