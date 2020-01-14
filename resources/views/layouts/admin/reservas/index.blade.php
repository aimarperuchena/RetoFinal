@extends('layouts.admin.adminView')
@section('adminContent')

<div class="row">
  <div class="col-xl-8 col-lg-7">
    <h3>Reservas</h3>

    <form action="{{route('admin.reservaIndexFiltro')}}" method="post">
    {{ csrf_field() }}
    <span>Tipo</span>
    <select name="tipo">
    @if($tipo==1)
    <option value="1">Futuro</option>
    <option value="2">Historico</option>
    @endif
    @if($tipo==2)
    <option value="2">Historico</option>
    <option value="1">Futuro</option>
   
    @endif
    </select>
    <input type="submit" value="Enviar">
    </form>
    <table class="table table-striped">
      <tr>
        <th>Socio</th>
        <th>Tipo</th>
        <th>Fecha</th>
        <th>Personas</th>
        <th>Editar</th>
        @if($tipo==1)
        <th>Eliminar</th>
        @endif
        <th>Ver</th>
      </tr>
      @foreach($reservas as $reserva)
      <tr>
      <td>{{$reserva->usuario->nombre}}  {{$reserva->usuario->apellido}}</td>
      <td>{{$reserva->tipo->nombre}}</td>
      <td>{{$reserva->fecha}}</td>
      <td>{{$reserva->personas}}</td>
      <td><a href="/admin/reservaEdit/{{$reserva->id}}"><i class="fa fa-pencil" style="color:black"></i></a></td>
      @if($tipo==1)
      <td><a href="/admin/reservaDelete/{{$reserva->id}}"><i class="fa fa-trash-o" style="color:black"></a></td>
      @endif
      
      <td><a href="/admin/reservaShow/{{$reserva->id}}"><i class="fa fa-eye" style="color:black"></i></a></td>
      </tr>
      @endforeach
    </table>
  </div>
</div>
@endsection
