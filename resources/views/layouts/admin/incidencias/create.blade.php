@extends('layouts.admin.adminView')
@section('adminContent')
@extends('layouts.app')

         
                    <!-- Content Row -->

                    <div class="row">
                    <div class="col-xl-8 col-lg-7">
                    <h3>Añadir Incidencia</h3>
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
              </div>
              </div>
              @endsection