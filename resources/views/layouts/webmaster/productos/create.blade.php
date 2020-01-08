
@extends('layouts.index')
@section('content')
@include('layouts.webmaster.WMasterView')
<br><br><br><br>
<h3>Añadir Productos</h3>
<form action="{{route ('webmaster.productStore')}}" method="post">
    {{ csrf_field() }}
    <span>nombre: </span><input type="text" name="nombre" id="nombre"><br>
    <span>descripcion: </span><input type="text" step="any" name="descripcion" id="descripcion"><br>
    <input type="submit" value="Insertar" id="submit" id="enviar">
</form>
@endsection