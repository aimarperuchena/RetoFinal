@extends('layouts.admin.adminView')
@section('adminContent')
@extends('layouts.app')

                    <!-- Content Row -->

                    <div class="row">
                    <div class="col-xl-8 col-lg-7">
                    <h3>Añadir Mesas</h3>
<form action="{{route ('admin.mesaStore')}}" method="post">
    {{ csrf_field() }}

  
    <span>Capacidad: </span><input type="number" name="capacidad" id="capacidad"><br>
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