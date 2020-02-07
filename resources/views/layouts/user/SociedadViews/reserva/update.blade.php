@extends('layouts.app')
@section('content')

<br><br><br><br>
<script src="/assets/js/jquery-3.3.1.min.js"></script>
<div class="container">
  <div class="d-flex text-center flex-wrap">
    <div class="mb-5 ml-5 col-12">
      <h1>{{ __('multi.hacerreserva') }}</h1>
      <h3>{{ __('multi.hacerreserva1') }} {{$fechaEditar}} {{ __('multi.hacerreserva2') }}</h3>
      <h5>{{$sociedad->nombre}}</h5>
      <h1>{{ __('multi.plano') }}</h1>
      <div class="mb-5 mt-5">
        <img src="{{$sociedad->link_plano}}" >
      </div>
    </div>
    <div class="jumbotronm col-12 mb-5">
      <div class="col">
        <div class="col">
          <h1>{{ __('multi.hacerreserva3') }}</h1>
        </div>
        <div class="col">
          <h3>para: <span style="text-transform: uppercase;">{{$tipoEditar->nombre}}</span></h3>
        </div>
      </div>
      <div class="col d-flex justify-content-around flex-wrap">
        @if($mesas)
        @foreach($mesas as $mesa)
        <div class="card m-2" style="width: 12rem; height:18rem;">
          <img src="/assets/img/mesa.png" class="card-img-top" alt="...">
          <hr>
          <h5 class="card-title">{{ __('multi.nomform') }}: {{$mesa -> nombre}}</h5>
          <p class="card-text">{{ __('multi.capacidad') }}: {{$mesa -> capacidad}}</p>
        </div>
        @endforeach
        @endif
      </div>
    </div>
  </div>
  <div id="sensible" class="container">
    <form class="form-group" action="{{ route('sociedad.update',[$sociedad -> id, $tipoEditar->id, $oldReserva]) }}" method="get">
      @csrf
      <div class="input-group mb-3">
        <div class="input-group-prepend border">
          <span class="input-group-text" id="basic-addon1">Fecha</span>
        </div>
        <input type="date" name="fecha" value="{{$fechaEditar }}" class="form-control border" placeholder="Fecha">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <label class="input-group-text" for="inputGroupSelect01">{{ __('multi.tipo') }}</label>
        </div>
        <select id="tipo" class="custom-select" name="tipo">
          <option value="..." selected>Elige...</option>
          @if($tipo)
          @foreach($tipo as $comida)
          @if(($tipoEditar->id) === $comida->id)
          <option value="{{$comida -> id}}" selected>{{$comida -> nombre}}</option>
          continue
          @endif
          @if( $comida->id != ($tipoEditar->id))
          <option value="{{$comida -> id}}">{{$comida -> nombre}}</option>
          @endif
          @endforeach
          @endif
        </select>
      </div>
      <div class="d-flex form-group justify-content-between">
        <label for="exampleInputEmail1" class="ml-3 justify-content-start">{{ __('multi.numpersonas') }}:</label>
        <input type="text" name="personas" class="mr-3 justify-content-end form-control border" style="width: 250px;" value="{{$personaEditar}}">
      </div>
      <small class="form-text text-muted mb-3">{{ __('multi.requisito') }}</small>
      <!-- Según el número de mesas que tenga la sociedad registradas -->
      <div class="d-flex pr-3 form-group justify-content-between">
        <label for="exampleInputPassword1" class="ml-3 justify-content-start">{{ __('multi.table') }}:</label>
        <select style="width: 250px;" class="custom-select"name="mesa" id="mesa">
          <option value="..." selected>Elige...</option>
          @if($mesas)
            @foreach($mesas as $mesa)
              <option value="{{$mesa -> id}}">{{$mesa -> nombre}}</option>
          @endforeach
        @endif
        </select>
      </div>
      <button id="accion" type="submit" class="btn btn-primary reserva">{{ __('multi.mesa') }}</button>
      @if(isset($mensaje))
      <p class="text-danger mt-3 mb-3">{{$mensaje}}</p>
      @endif
      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
      @endif
    </form>
  </div>
  <script>
    $('#sensible').hover(function(){
      if ($('#mesa option:selected').text() === 'Elige...' || $('#tipo option:selected').text() === 'Elige...') {
        $('#accion').attr('disabled', 'disabled');
      } else {
        $('#accion').removeAttr('disabled');
      }
    });
  </script>
</div>
@endsection
