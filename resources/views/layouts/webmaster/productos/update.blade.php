
@extends('layouts.index')
@section('content')
@include('layouts.webmaster.WMasterView')
<br><br><br><br>
<h3>Editar Stock</h3>
<form action="{{route ('webmaster.productUpdate', $producto->id)}}" method="post">
    {{ csrf_field() }}
    <label>Nombre del producto</label>
    <input type="text" name="nombre" value="{{$producto->nombre}}"><br>
    <label>Descripcion del producto</label>
    <input type="text" name="descripcion" value="{{$producto->descripcion}}"><br>
    <input type="submit" value="Actualizar">

</form>
@endsection
