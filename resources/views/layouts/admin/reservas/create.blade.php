@extends('layouts.admin.adminView')
@section('adminContent')


<!-- Content Row -->

<div class="row">
    <div class="col-xl-8 col-lg-7">
        <h3>Crear Reserva</h3>

        <form action="{{route('admin.reservaStore')}}" method="post">
            {{ csrf_field() }}
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Socio:</label>
                </div>

                <select class="custom-select" name="usuario">
                    @foreach($socios as $socio)


                    <option value="{{$socio->id}}">{{$socio->nombre}} {{$socio->apellido}}</option>

                    @endforeach
                </select>
            </div>


            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Tipo:</label>
                </div>
                <select class="custom-select" name="tipo">

                    @foreach($tipo as $t)

                    <option value="{{$t->id}}">{{$t->nombre}}</option>

                    @endforeach
                </select>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Fecha</span>
                </div>
                <input type="date" class="form-control border" placeholder="Fecha" aria-label="Fecha" name="fecha" aria-describedby="basic-addon1">
            </div>


            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Personas</span>
                </div>
                <input type="number" class="form-control border" placeholder="Personas" aria-label="Fecha" name="personas" aria-describedby="basic-addon1">
            </div>


            <input class="btn btn-primary" type="submit" value="Actualizar">
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