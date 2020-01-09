@extends('layouts.admin.adminView')
@section('adminContent')


                    <!-- Content Row -->

                    <div class="row">
                    <div class="col-xl-8 col-lg-7">
                    <h3>Reserva</h3>
<b>Socio: </b><span>{{$reserva->usuario->nombre}} {{$reserva->usuario->apellido}}</span><br>
<b>Tipo: </b><span>{{$reserva->tipo->nombre}}</span><br>
<b>Personas: </b><span>{{$reserva->personas}}</span>

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

<h3>Factura</h3>
<table>
    <tr>
        <th>Id</th>
        <th>Fecha</th>
        <th>Personas</th>
        <th>Importe</th>
    </tr>

    <tr>
        <td>{{$reserva->factura->id}}</td>
        <td>{{$reserva->factura->fecha}}</td>
        <td>{{$reserva->factura->personas}}</td>
        <td>{{$reserva->factura->importe}}</td>
        <td><a href="/admin/facturaShow/{{$reserva->factura->id}}"><i class="fa fa-eye" style="color:black"></i></a></td>
    </tr>
</table>
                           </div>
              </div>
              @endsection


