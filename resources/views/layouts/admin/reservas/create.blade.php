@extends('layouts.admin.adminView')
@section('adminContent')


<!-- Content Row -->

<div class="row">
    <div class="col-xl-5 col-lg-7">
        <h3>Crear Reserva</h3>

        <form action="{{route('admin.reservaFechaFind')}}" method="post">
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

            @if(isset($reserva))
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Tipo:</label>
                </div>
                <select class="custom-select" name="tipo">
                    <option value="{{$reserva->tipo->id}}">{{$reserva->tipo->nombre}}</option>
                    @foreach($tipo as $t)
                    @if($t->id!=$reserva->tipo_id)
                    <option value="{{$t->id}}">{{$t->nombre}}</option>
                    @endif
                    @endforeach
                </select>
            </div>
            @else

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
            @endif

            @if(isset($reserva))
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Fecha</span>
                </div>
                <input type="date" date_format="Y-m-d"  class="form-control border" placeholder="Fecha" aria-label="Fecha" name="fecha" aria-describedby="basic-addon1">
            </div>
            @else

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Fecha</span>
                </div>
                <input type="date" class="form-control border" placeholder="Fecha" aria-label="Fecha" name="fecha" aria-describedby="basic-addon1">
            </div>
            @endif

            @if(isset($reserva))
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Personas</span>
                </div>
                <input type="number" value="{{$reserva->personas}}" class="form-control border" placeholder="Personas" aria-label="Fecha" name="personas" aria-describedby="basic-addon1">
            </div>
            @else
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Personas</span>
                </div>
                <input type="number" class="form-control border" placeholder="Personas" aria-label="Fecha" name="personas" aria-describedby="basic-addon1">
            </div>
            @endif
            <input class="btn btn-primary" type="submit" value="Buscar Mesas">
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

    <div class="col-xl-5 col-lg-7">

    

   

        @if(isset($mesas))
        <h3>Mesas Libres</h3>
        <form action="" method="post">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Mesas:</label>
                </div>
                <select class="custom-select" name="tipo">
                    @foreach($mesas as $mesa)

                    <option value="{{$mesa->id}}">{{$mesa->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <input type="submit" value="Crear Reserva" class="btn btn-primary">

            <input type="hidden" name="fecha" value="{{$fecha}}">
            <input type="hidden" name="personas" value="{{$personas}}">
            <input type="hidden" name="tipo" value="{{$tipo}}">
            <input type="hidden" name="usuario" value="{{$usuario}}">
        </form>

        @endif
    </div>
    @endsection