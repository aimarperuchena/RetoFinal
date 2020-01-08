
@extends('layouts.index')
@section('content')
@include('layouts.webmaster.WMasterView')
<br><br><br><br>
<h3>Añadir Productos</h3>
<form action="{{route ('webmaster.productStore')}}" method="post">
    {{ csrf_field() }}
    <label>Nombre del producto</label>
    <input type="text" name="nombre"><br>
    <label>Descripcion del producto</label>
    <input type="text" name="descripcion"><br>
    <input type="submit" value="Añadir">
</form>
@endsection
