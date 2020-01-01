@extends('layouts.index')
@section('content')
<br><br><br><br>

<h3>Añadir Productos</h3>
<form action="{{route ('admin.incidenciaStore')}}" method="post">
    {{ csrf_field() }}
    <span>Descripción: </span><input type="text" name="descripcion" id=""><br>
    <input type="submit" value="Enviar">
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