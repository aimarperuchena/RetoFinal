@extends('layouts.app')
@section('content')

<br><br><br><br>
<div class="container">
  <div class="row">
    <div class="col-xl-8 col-lg-7">
      <h2>Detalles Factura</h2>
      <div class="input-group mb-3">
        <div class="input-group-prepend border">
          <b class="input-group-text" id="basic-addon1">Usuario</b>
        </div>
        <input type="text" readonly class="form-control border" value="{{$factura->reserva->usuario->nombre}} {{$factura->reserva->usuario->apellido}}" placeholder="Usuario" aria-label="Usuario" aria-describedby="basic-addon1">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend border">
          <b class="input-group-text" id="basic-addon1">Fecha</b>
        </div>
        <input type="text" readonly class="form-control border" value="{{$factura->fecha}} " placeholder="Fecha" aria-label="Fecha" aria-describedby="basic-addon1">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend border">
          <b class="input-group-text" id="basic-addon1">Personas</b>
        </div>
        <input type="text" readonly class="form-control border" value="{{$factura->personas}} " placeholder="Personas" aria-label="Personas" aria-describedby="basic-addon1">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend border">
          <b class="input-group-text" id="basic-addon1">Importe</b>
        </div>
        <input type="text" readonly class="form-control border" value="{{$factura->importe}} " placeholder="Importe" aria-label="Importe" aria-describedby="basic-addon1">
      </div>
     
    
    
      <h3>Lineas</h3>
      <table class="table table-striped">
        <tr>
          <th>Nombre</th>
          <th>Descripción</th>
          <th>Unidades</th>
          <th>Importe</th>
          <th>Editar</th>
          <th>Eliminar</th>
        </tr>
        @foreach($factura->lineas as $linea)
        <tr>

          <td>{{$linea->producto->producto->nombre}}</td>
          <td>{{$linea->producto->producto->descripcion}}</td>
          <td>{{$linea->importe}}</td>
          <td>{{$linea->unidades}}</td>
          <td><a href="/lineas/edit/{{$linea->id}}"><i class="fa fa-pencil" style="color:black"></i></a></td>

          <td><a href="/lineas/delete/{{$linea->id}}"><i class="fa fa-trash-o" style="color:black"></i></a></td> -->

        </tr>
        @endforeach

      </table>
      <a class="btn btn-primary" type="button" href="/lineas/create/{{$factura->id}}">Crear Linea</a>


    </div>
  </div>
</div>
@endsection