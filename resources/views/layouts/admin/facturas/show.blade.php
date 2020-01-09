@extends('layouts.admin.adminView')
@section('adminContent')
@extends('layouts.app')
<div class="row">
                    <div class="col-xl-8 col-lg-7">
<b>Id: </b><span>{{$factura->id}}</span><br>
<b>Usuario: </b><span>{{$factura->reserva->usuario->nombre}}  {{$factura->reserva->usuario->apellido}}</span><br>
<b>Reserva: </b><span>{{$factura->reserva_id}}</span><br>
<b>Fecha: </b><span>{{$factura->fecha}}</span><br>
<b>Personas: </b><span>{{$factura->personas}}</span><br>
<b>Importe: </b><span>{{$factura->importe}}</span><br>


<table>
    <tr>
        <th>Id</th>
        <th>Id Producto</th>
        <th>Descripción</th>
        <th>Unidades</th>

    </tr>
    @foreach($factura->lineas as $linea)
    <tr>
        <td>{{$linea->id}}</td>
        <td>{{$linea->producto->producto_id}}</td>
    </tr>
    @endforeach
   
</table>
</div>
</div>
@endsection