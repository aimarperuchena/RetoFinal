@extends('layouts.index')
@section('content')
<br><br><br><br><br>

<div class="d-flex text-center flex-wrap">
  <div class="mb-5 ml-5 col">
    <h1>Mesas</h1>
    <div class="mb-5 mt-5">
      <img src="{{secure_asset('assets/img/planos/'.$sociedad->link_plano)}}" alt="plano_sociedad">
    </div>
  </div>
  <div class="col">
    <h1>Reserva</h1>
     <form class="mt-5 mr-5" action="{{ route('sociedad.reservaFecha',$sociedad -> id) }}" method="post">
       @csrf
       <div class="d-flex pr-3 form-group justify-content-between">
         <label for="exampleInputPassword1" class="ml-3 justify-content-start">Fecha:</label>
         <input type="date" name="fecha" class="mr-3 justify-content-end" value="{{$fechaEditar ?? ''}}">
       </div>
       <div class="d-flex pr-3 form-group justify-content-between">
         <label for="exampleInputPassword1" class="ml-3 justify-content-start">Tipo de comida:</label>
         <select style="width: 250px;" class="form-control"name="tipo">
           <option value="..." selected>Elige...</option>
           @if($tipo)
             @foreach($tipo as $comida)
               @if(($tipoEditar->id ?? '') === $comida->id)
                 <option value="{{$comida -> id}}" selected>{{$comida -> nombre}}</option>
                 continue
               @endif
               @if( $comida->id != ($tipoEditar->id ?? ''))
                <option value="{{$comida -> id}}">{{$comida -> nombre}}</option>
               @endif
           @endforeach
         @endif
         </select>
       </div>
       <button type="submit" class="btn btn-primary">Mesas</button>
     </form>
  </div>
</div>
@endsection
