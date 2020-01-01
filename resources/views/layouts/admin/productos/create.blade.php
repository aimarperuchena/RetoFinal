@extends('layouts.index')
@section('content')
<br><br><br><br>
<script src="{{ asset('js/components/pizza.js')}}"></script>
<h3>Añadir Productos</h3>
<form action="{{route ('admin.productStore')}}" method="post">
    {{ csrf_field() }}

    <span>Producto: </span><select name="producto">
        @foreach( $productos as $producto)
        <option value="{{$producto->id}}">{{$producto->nombre}}</option>
        @endforeach
    </select><br>
    <span>Stock: </span><input type="number" name="stock" id="stock"><br>
    <span>Precio: </span><input type="number" step="any" name="precio" id="precio"><br>
    <input type="submit" value="Insertar" id="submit" id="enviar">
</form>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
@endsection