@extends('layouts.index')
@section('content')
<br><br><br><br>

<h3>Añadir Productos</h3>
<form action="{{route ('admin.productStore')}}" method="post">
{{ csrf_field() }}

<span>Producto: </span><select name="producto">
    @foreach( $productos as $producto)
    <option value="{{$producto->id}}">{{$producto->nombre}}</option>
    @endforeach
</select><br>
<span>Stock: </span><input type="number" name="stock" id=""><br>
<span>Precio: </span><input type="number" name="precio" id=""><br>
    <input type="submit" value="Insertar">
</form>
@endsection