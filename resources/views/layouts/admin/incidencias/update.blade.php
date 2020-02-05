@extends('layouts.admin.adminView')
@section('adminContent')

<script src="{{ secure_asset('assets/js/jquery-3.4.1.min.js')}}"></script>

<!-- Content Row -->
<script src="{{secure_asset('assets/js/validacion_update_incidencia.js')}}"></script>

<div class="row">
    <div class="col-xl-8 col-lg-7">
        <h3>Editar Incidencia</h3>
        <form action="{{route ('admin.incidenciaUpdate')}}" method="post">
            {{ csrf_field() }}

            <input type="hidden" name="id" value="{{$incidencia->id}}"><br>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Descripción: </span>
                </div>
                <input type="text" id="descripcion" class="form-control border" placeholder="Descripcion" aria-label="Descripción" value="{{$incidencia->descripcion}}" name="descripcion" aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Tipo:</label>
                </div>
                <select class="custom-select" name="estado">
                    <option value="pendiente">Pendiente</option>
                    <option value="solucionado">Solucionado</option>
                </select>
            </div>
            <input class="btn btn-primary" id="enviar" type="submit" value="Actualizar">
           
        </form>
        <div class="alert alert-danger" style="visibility:hidden" id="div_validacion">
            <ul>
               
                <li>La descripción debe tener minimo 20 caracteres</li>
               
            </ul>
        </div>
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