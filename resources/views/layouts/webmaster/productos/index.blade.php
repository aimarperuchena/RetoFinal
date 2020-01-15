@extends('layouts.webmaster.WMView')

@section('webmasterContent')
<!-- Content Row -->
<br><br>
<div class="row">
  <div class="col-xl-12 col-lg-7">
  <a href="/webmaster/productCreate/">Añadir Producto</a>
  <table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Editar</th>
        </tr>
    </thead>
    <tbody>
        @foreach($productos as $producto)
            <tr>
                <td>{!! $producto->id !!}</td>
                <td>{!! $producto->nombre !!}</td>
                 <td>{!! $producto->descripcion !!}</td>
                 <td><a href="/webmaster/productEdit/{{$producto->id}}"><i class="fa fa-pencil" style="color:black"></i></a></td>
            </tr>
        @endforeach
    </tbody>
    </table>
  </div>
</div>
@endsection
