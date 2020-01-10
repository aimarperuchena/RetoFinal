@extends('layouts.admin.adminView')
@section('adminContent')

<div class="row">
  <div class="col-xl-8 col-lg-7">
    <h3>Reservas</h3>
    <table class="table table-striped">
      <tr>
        <th>Socio</th>
        <th>Tipo</th>
        <th>Fecha</th>
        <th>Personas</th>
        <th>Editar</th>
        <th>Eliminar</th>
        <th>Ver</th>
      </tr>
      @foreach($sociedad->reservas as $reserva)
      <tr>
      <td>{{$reserva->usuario->nombre}}  {{$reserva->usuario->apellido}}</td>
      <td>{{$reserva->tipo->nombre}}</td>
      <td>{{$reserva->fecha}}</td>
      <td>{{$reserva->personas}}</td>
      <td><i class="fa fa-pencil" style="color:black"></i></td>
      <td><i class="fa fa-trash-o" style="color:black"></td>
      <td><a href="/admin/reservaShow/{{$reserva->id}}"><i class="fa fa-eye" style="color:black"></i></a></td>
      </tr>
      @endforeach
    </table>
  </div>
</div>
@endsection
