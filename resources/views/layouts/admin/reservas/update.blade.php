@extends('layouts.admin.adminView')
@section('adminContent')


<!-- Content Row -->

<div class="row">
    <div class="col-xl-8 col-lg-7">
        <h3>Editar Reserva</h3>

        <form action="{{route('admin.reservaUpdate')}}" method="post">
        {{ csrf_field() }}
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Socio:</label>
                </div>
                <select class="custom-select" name="usuario">
                    <option value="{{$reserva->usuario->id}}">{{$reserva->usuario->nombre}} {{$reserva->usuario->apellido}} </option>
                    @foreach($socios as $user)
                    @if($user->role_id==3)
                    @if($user->id!=$reserva->usuario->id)
                    <option value="{{$user->id}}">{{$user->nombre}} {{$user->apellido}}</option>
                    @endif
                    @endif
                    @endforeach
                </select>
            </div>


            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Tipo:</label>
                </div>
                <select class="custom-select" name="tipo">
                    <option value="{{$reserva->tipo->id}}">{{$reserva->tipo->nombre}}</option>
                    @foreach($tipo as $t)
                    @if($t->id!=$reserva->tipo->id)
                    <option value="{{$t->id}}">{{$t->nombre}}</option>
                    @endif
                    @endforeach
                </select>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Fecha</span>
                </div>
                <input type="date" class="form-control border" placeholder="Fecha" aria-label="Fecha"  name="fecha" value="{{$reserva->fecha}}" aria-describedby="basic-addon1">
            </div>

            
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Personas</span>
                </div>
                <input type="number" class="form-control border" placeholder="Personas" aria-label="Fecha"  name="personas" value="{{$reserva->personas}}" aria-describedby="basic-addon1">
            </div>
            <input type="hidden" name="id" value="{{$reserva->id}}">
            
            <input class="btn btn-primary" type="submit" value="Actualizar">
        </form>





    </div>
</div>
@endsection