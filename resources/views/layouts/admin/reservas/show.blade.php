@extends('layouts.admin.adminView')
@section('adminContent')


                    <!-- Content Row -->

                    <div class="row">
                    <div class="col-xl-8 col-lg-7">
                    <h3>Reserva</h3>
<b>Socio: </b><span>{{$reserva->usuario->nombre}} {{$reserva->usuario->apellido}}</span><br>
<b>Tipo: </b><span>{{$reserva->tipo->nombre}}</span><br>
<b>Personas: </b><span>{{$reserva->personas}}</span>

<hr>
<h3>Mesas</h3>
<table>
    <tr>
        <th>Id</th>
        <th>Capacidad</th>
    </tr>

    @foreach($reserva->mesas as $mesa)
    <tr>
        <td>{{$mesa->id}}</td>
        <td>{{$mesa->capacidad}}</td>
    </tr>
    @endforeach
</table>
<hr>
@if(count($facturas)>0)
<h3>Factura</h3>
<table>
    <tr>
        <th>Id</th>
        <th>Fecha</th>
        <th>Personas</th>
        <th>Importe</th>
    </tr>
  
@foreach($facturas as $factura)
    <tr>
        <td>{{$factura->id}}</td>
        <td>{{$factura->fecha}}</td>
        <td>{{$factura->personas}}</td>
        <td>{{$factura->importe}}</td>
        <td><a href="/admin/facturaShow/{{$factura->id}}"><i class="fa fa-eye" style="color:black"></i></a></td>
    </tr>
    @endforeach
  
</table>
@else
<h3>No tiene factura</h3>

@endif
                           </div>
              </div>
              @endsection


