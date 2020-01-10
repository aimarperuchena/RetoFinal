@extends('layouts.admin.adminView')
@section('adminContent')



           
                    <!-- Content Row -->

                    <div class="row">
                    <div class="col-xl-8 col-lg-7">
                    <form action="{{route('admin.sociedad.update')}}" method="post">
                    {{ csrf_field() }}
                    <label>Nombre: </label><input type="text" name="nombre" value="{{$sociedad->nombre}}" id=""><br>
                    <label>Ubicación: </label><input type="text" name="ubicacion" value="{{$sociedad->ubicacion}}" id=""><br>
                    <label>Teléfono: </label><input type="number" name="telefono" id="" value="{{$sociedad->telefono}}"> <br>
                  
                    <input type="submit" value="Enviar" >
                    </form>

                    <h3>Cambiar Plano</h3>
                    <form action="{{route('admin.sociedad.planoUpdate')}}" method="post">
                        <span>Imagen</span><input type="file" name="imagen" id=""><br>

                        <input type="submit" value="Subir">
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