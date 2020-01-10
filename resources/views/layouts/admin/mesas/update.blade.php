@extends('layouts.admin.adminView')
@section('adminContent')
@extends('layouts.app')




                    <div class="row">
                    <div class="col-xl-8 col-lg-7">
                    <h3>Editar Mesa</h3>
                    
<form action="{{route ('admin.mesaUpdate')}}" method="post">
    {{ csrf_field() }}
<input type="hidden" name="id" value="{{$mesa->id}}"><br>
  <span>Nombre</span><input type="text" name="nombre" value="{{$mesa->nombre}}" id="nombre"><br>
    <span>Capacidad: </span><input type="number" name="capacidad" id="capacidad" value="{{$mesa->capacidad}}"><br>
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
                           </div>
              </div>
              @endsection