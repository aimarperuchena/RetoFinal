@extends('layouts.index')
@section('content')
<br><br><br><br><br>

<div class="d-flex text-center flex-wrap">
  <div class="mb-5 ml-5 col">
    <h1>Mesas</h1>
    <div class="mb-5 mt-5">
      <img src="{{url('assets/img/planos',$sociedad->link_plano)}}" alt="plano_sociedad">
    </div>
    <div class="jumbotronm d-flex flex-wrap" style="width: 50rem;">
      @if($mesas)
        @foreach($mesas as $mesa)
          <div class="card m-2" style="width: 12rem;">
            <img src="{{url('assets/img/mesa.png')}}" class="card-img-top" alt="...">
            <hr>
            <h5 class="card-title">Nombre: {{$mesa -> nombre}}</h5>
            <p class="card-text">Capacidad: {{$mesa -> capacidad}}</p>
          </div>
        @endforeach
      @endif
    </div>
  </div>
  <div class="col">
    <h1>Reserva</h1>
     <form class="mt-5 mr-5" action="{{ route('sociedad.crear',$sociedad -> id) }}">
       <div class="d-flex form-group justify-content-between">
         <label for="exampleInputEmail1" class="ml-3 justify-content-start">Nº Personas</label>
         <input type="number" name="personas" style="width: 250px;" class="form-control" value="{{$personaEditar ?? ''}}">
       </div>
       <small class="form-text text-muted mb-3">Por favor no introduzca de más o de menos.</small>
       <div class="d-flex pr-3 form-group justify-content-between">
         <label for="exampleInputPassword1" class="ml-3 justify-content-start">Fecha:</label>
         <input type="date" name="fecha" class="mr-3 justify-content-end" value="{{$fechaEditar ?? ''}}">
       </div>
       <div class="d-flex pr-3 form-group justify-content-between">
         <label for="exampleInputPassword1" class="ml-3 justify-content-start">Tipo de comida:</label>
         <select style="width: 250px;" class="form-control"name="tipo">
           <option value="{{$tipoEditar->id ?? '...'}}" selected>{{$tipoEditar->nombre ?? 'Elige...'}}</option>
           @if($tipo)
             @foreach($tipo as $comida)
               <option value="{{$comida -> id}}">{{$comida -> nombre}}</option>
           @endforeach
         @endif
         </select>
       </div>
       <!-- Según el número de mesas que tenga la sociedad registradas -->
       <div class="d-flex pr-3 form-group justify-content-between">
         <label for="exampleInputPassword1" class="ml-3 justify-content-start">Mesa:</label>
         <select name="mesa" style="width: 250px;" class="form-control">
           <option value=".." selected>Elige..</option>
           @if($mesas)
             @foreach($mesas as $mesa)
               <option value="{{$mesa -> id}}">Mesa {{$mesa -> nombre}}</option>
           @endforeach
         @endif
         </select>
       </div>
       <button type="submit" class="btn btn-primary">Reservar</button>
     </form>
  </div>
</div>
@endsection
