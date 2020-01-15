@extends('layouts.admin.adminView')
@section('adminContent')


<!-- Content Row -->

<div class="row">
    <div class="col-xl-6 col-lg-7">
        <h3>Reserva</h3>
        <b>Socio: </b><span>{{$reserva->usuario->nombre}} {{$reserva->usuario->apellido}}</span><br>
        <b>Tipo: </b><span>{{$reserva->tipo->nombre}}</span><br>
        <b>Personas: </b><span>{{$reserva->personas}}</span>

        <hr>
        <h3>Mesas</h3>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Capacidad</th>
            </tr>
            </thead>
            @foreach($reserva->mesas as $mesa)
            <tr>
                <td>{{$mesa->nombre}}</td>
                <td>{{$mesa->capacidad}}</td>
            </tr>
            @endforeach
        </table>
        <hr>
      @if(!is_null($factura))
        <h3>Factura</h3>
       
        <table class="table table-striped border">
            <thead>
            <tr>
             
                <th>Fecha</th>
                <th>Personas</th>
                <th>Importe</th>
            </tr>
            </thead>
            
            <tr>
        
                <td>{{$factura->fecha}}</td>
                <td>{{$factura->personas}}</td>
                <td>{{$factura->importe}}</td>
               
            </tr>
          <br>

        </table>
        @endif
    </div>
    @if(!is_null($factura))
    <div class="col-xl-4 col-lg-7">
        <h3>Lineas Factura</h3>
    <table class="table table-striped border ">
        <thead>
    <tr>
       
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Unidades</th>
        <th>Importe</th>
        <th>Eliminar</th>

    </tr>
    </thead>
    @foreach($factura->lineas as $linea)
    <tr>
      
       <td>{{$linea->producto->producto->nombre}}</td>
       <td>{{$linea->producto->producto->descripcion}}</td>
        <td>{{$linea->unidades}}</td>
        <td>{{$linea->importe}}</td>
        <td><a href="/admin/deleteLinea/{{$linea->id}}"><i class="fa fa-trash-o" style="color:black"></i></a></td>

    </tr>
    @endforeach
  
</table>
<a  class="btn btn-primary"  href="/admin/lineaAdd/{{$factura->id}}">Añadir Linea </a>
    </div>
    @endif
</div>
@endsection