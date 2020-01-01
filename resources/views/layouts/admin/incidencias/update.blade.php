@extends('layouts.index')
@section('content')
<br><br><br><br>

<h3>Editar Incidencia</h3>
<form action="{{route ('admin.incidenciaUpdate')}}" method="post">
    {{ csrf_field() }}

    <input type="hidden" name="id" value="{{$incidencia->id}}"><br>
    <span>Descripción: </span><input type="text" name="descripcion" value="{{$incidencia->descripcion}}"><br>
    <span>Estado: </span><select name="estado">
        <option value="pendiente">Pendiente</option>
        <option value="solucionado">Solucionado</option>
    </select><br>
    <input type="submit" value="Actualizar">
</form>
@endsection