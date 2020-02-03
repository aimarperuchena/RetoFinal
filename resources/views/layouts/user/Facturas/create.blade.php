@extends('layouts.app')
@section('content')

<br><br><br><br>
<!-- Content Row -->
<div class="container">
  <div class="row">
      <div class="col-xl-6 col-lg-7">
        <h5 style="color:red;">{{$error ?? ''}}</h5>
        @if(!is_null($factura ?? ''))
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
                  <td>{{$factura ->fecha}}</td>
                  <td>{{$factura ->personas}}</td>
                  <td>{{$factura ->importe}}</td>
              </tr>
            <br>
          </table>
          @endif
      </div>
      <div class="col-xl-4 col-lg-7">
        <h3>Lineas Factura</h3>
        <table class="table table-striped border ">
          <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Unidades</th>
                <th>Importe</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
          </thead>
          @if(!is_null($factura->lineas))
            @foreach($factura->lineas as $linea)
              <tr>
                 <td>{{$linea->producto->producto->nombre}}</td>
                 <td>{{$linea->producto->producto->descripcion}}</td>
                  <td>{{$linea->unidades}}</td>
                  <td>{{$linea->importe}}</td>
                  <td><a href="/admin/lineaEdit/{{$linea->id}}"><i class="fa fa-pencil" style="color:black"></i></a></td>
                  <td><a href="/admin/deleteLinea/{{$linea->id}}"><i class="fa fa-trash-o" style="color:black"></i></a></td>
              </tr>
            @endforeach
          @endif
        </table>
        <a class="btn btn-primary"  href="{{ route('linea.create',$factura->id)}}">Añadir Linea </a>
      </div>
  </div>
</div>
@endsection
