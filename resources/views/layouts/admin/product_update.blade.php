@extends('layouts.index')
@section('content')
<br><br><br><br>

<h3>Editar Stock</h3>
<form action="{{route ('admin.productUpdate')}}" method="post">
    <input type="hidden" name="id" value="{{$producto->id}}">
    <span>Nombre: </span><input type="text" name="" id="" value="{{$producto->producto->nombre}}" readonly><br>
    <span>Precio: </span><input type="number" name="precio" value="{{$producto->precio}}"><br>
    <span>Stock: </span><input type="number" name="stock" id="" value="{{$producto->stock}}">
    <input type="submit" value="Actualizar">
</form>
@endsection