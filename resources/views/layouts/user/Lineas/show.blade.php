@extends('layouts.app')
@section('content')

<br><br><br><br>
<div class="container text-center">
  <h1>Linea de <span style="text-transform: uppercase;">{{$user->nombre}}</span></h1>
  <h3>De la sociedad {{$sociedad->nombre}}</h3>
  <h5>Fecha: {{$factura->fecha}}</h5>
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Producto_id</th>
        <th scope="col">Producto</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Precio</th>
      </tr>
    </thead>
    <tbody>
        @if($factura)
          @foreach ($factura->lineas as $linea)
          <tr>
            <th scope="row">{{$linea->id}}</th>
            <td>{{$linea->producto_sociedad_id}}</td>
            <td>{{$linea->producto->producto->nombre}}</td>
            <td>{{$linea->producto->producto->descripcion}}</td>
            <td>{{$linea->unidades}}</td>
            <td>{{$linea->importe}}</td>
          </tr>
          @endforeach
        @endif
    </tbody>
  </table>
</div>
@endsection
