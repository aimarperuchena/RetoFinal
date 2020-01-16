@extends('layouts.admin.adminView')
@section('adminContent')


<script src="{{ url('assets/js/jquery-3.4.1.min.js')}}"></script>

<!-- Content Row -->
<script src="{{secure_asset('assets/js/validacion_update_sociedad.js')}}"></script>
<div class="row">
    <div class="col-xl-8 col-lg-7">
        <form action="{{route('admin.sociedad.update')}}" method="post">
            {{ csrf_field() }}
            <h3>Actualizar Datos</h3>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Nombre: </span>
                </div>
                <input type="text" value="{{$sociedad->nombre}}" required class="form-control border" placeholder="Nombre" id="nombre" aria-label="Nombre" name="nombre" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Ubicación: </span>
                </div>
                <input type="text" value="{{$sociedad->ubicacion}}" required class="form-control border" placeholder="Ubicación" id="ubicacion" aria-label="Ubicacion" name="ubicacion" aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Teléfono: </span>
                </div>
                <input type="number" value="{{$sociedad->telefono}}" required class="form-control border" placeholder="Teléfono" id="telefono" aria-label="telefono" name="Teléfono" aria-describedby="basic-addon1">
            </div>
            <input class="btn btn-primary" type="submit" id="update_sociedad" value="Crear">
        </form>
        <div class="alert alert-danger"style="visibility:hidden" id="validacion_update">
            <ul id="error_val">
                
                <li id="error_nombre"></li>
                <li id="error_ubicacion"></li>
                <li id="error_telefono"></li>
              
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
        <!-- <h3>Cambiar Plano</h3>
        <form action="{{route('admin.sociedad.planoUpdate')}}" method="post">

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupFileAddon01">Subir</span>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="imagen" name="imagen" aria-describedby="inputGroupFileAddon01">
                    <label class="custom-file-label" for="inputGroupFile01">Elegir Imagen</label>
                </div>
            </div>
       
        
            <input class="btn btn-primary" type="submit" value="Subir">
        </form> -->
    </div>


</div>








@endsection