@extends('layouts.app')
@section('content')

<br><br><br><br>
<div class="container text-center">
  <h1>Seleccione la Reserva</h1>
  <h3>Seleccione el producto e inserte la cantidad consumida</h3>
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Sociedad</th>
        <th scope="col">Tipo</th>
        <th scope="col">Fecha</th>
        <th scope="col">Producto</th>
        <th scope="col">Cantidad</th>
        <th scope="col">#</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach($reservas as $reserva)
          <tr>
            <form action="{{ route('factura.store',$reserva->id) }}" method="post">
              @csrf
            <th scope="row">{{$reserva->id}}</th>
            <td>{{$reserva->sociedad->nombre}}</td>
            <td>{{$reserva->tipo->nombre}}</td>
            <td>{{$reserva->fecha}}</td>
            <td><select class="form-control" name="producto">
                  <option>Seleccione...</option>
                  @if($reserva->sociedad->productos)
                    @foreach($reserva->sociedad->productos as $producto)
                      <option value="{{$producto->producto_id}}">{{$producto->producto->nombre}}</option>
                    @endforeach
                  @endif
                </select></td>
            <td><input type="number" name="cantidad" value="0" class="form-control"></td>
            <td><button class="badge badge-info badge-pill text-white ml-2" type="submit"><i class="far fa-hand-pointer"></i></button></td>
            </form>
          </tr>
        @endforeach
      </tr>
    </tbody>
  </table>
</div>
@endsection
