@extends('layouts.admin.adminView')
@section('adminContent')


<!-- Content Row -->

<div class="row">
    <div class="col-xl-8 col-lg-7">
        <h3>Añadir Mesas</h3>
        <form action="{{route ('admin.mesaStore')}}" method="post">
            {{ csrf_field() }}
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Nombre: </span>
                </div>
                <input type="text" id="nombre" class="form-control border" placeholder="Nombre" aria-label="Nombre" name="nombre" aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Capacidad: </span>
                </div>
                <input type="text" id="capacidad" class="form-control border" placeholder="Capacidad" aria-label="Capacidad" name="capacidad" aria-describedby="basic-addon1">
            </div>
          
            <input class="btn btn-primary" type="submit" value="Crear">
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