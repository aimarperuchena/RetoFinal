@extends('layouts.app')
@section('content')

<br><br><br><br>
<div class="container text-center">
  <h1 class="mb-5">Datos de la reserva ({{$reserva}})</h1>
  @if (isset($facturas))
  <h2>Facturas</h2>
  <table class="table table-hover border">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">ID</th>
        <th scope="col">Info</th>
      </tr>
    </thead>
    @foreach($facturas as $factura)
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>{{$factura -> id}}</td>
        <td><a class="" href="{{ route('linea.show',$factura->id) }}"><i class="fa fa-eye" style="color:black"></i></a></td>
      </tr>
    </tbody>
    @endforeach
  </table>
  @else
  <h3 class="m-5">Crear Factura</h3>
  <a class="btn btn-primary btn-lg mb-5" href="{{ route('factura.create',$reserva) }}" role="button">Crear</a>
  @endif


  <h2>Mesas</h2>
  
  <table class="table table-hover border">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Capacidad</th>
      </tr>
    </thead>
    <tbody>
      @foreach($mesas as $mesa)
      <tr>
        <td>{{$mesa->nombre}}</td>
       <!--  <td>{{$mesa->capacidad}}</td> -->
      </tr>
      @endforeach
    </tbody>
  </table>

</div>

@endsection