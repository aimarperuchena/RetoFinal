@extends('layouts.admin.adminView')

@section('adminContent')
<!-- Content Row -->

<div class="row">
  <div class="col-xl-8 col-lg-7">
  <h3>Productos</h3>
  <a href="/admin/productCreate/">Añadir Producto</a>
  <table class="table table-striped">
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Precio</th>
      <th>Stock</th>
      <th>Editar</th>
      <th>Eliminar</th>
    </tr>
    @foreach($sociedad->productos as $producto)
    <tr>
      <td>{{$producto->id}}</td>
      <td>{{$producto->producto->nombre}}</td>
      <td>{{$producto->precio}}</td>
      <td>{{$producto->stock}}</td>
      <td><a href="/admin/productEdit/{{$producto->id}}"><i class="fa fa-pencil" style="color:black"></i></a></td>
      <td><a href="/admin/productDestroy/{{$producto->id}}"><i class="fa fa-trash-o" style="color:black"></i></a></td>
    </tr>
    @endforeach
  </table>
  </div>
</div>
@endsection
