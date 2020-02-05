@extends('layouts.app')
@section('content')

<br><br><br><br>
<div class="container">
  <div class="d-flex text-center flex-wrap">
    <div class="mb-5 ml-5 col-12">
      <h1>Realizar reserva</h1>
      <h3>Para la Fecha {{$fecha}} estas son las mesas libres.</h3>
      <h5>{{$sociedad->nombre}}</h5>
      <h1>Plano</h1>
      <div class="mb-5 mt-5">
        <img src="{{$sociedad->link_plano}}" >
      </div>
    </div>
    <div class="jumbotronm col-12 mb-5">
      <div class="col">
        <div class="col">
          <h1>Mesas disponibles</h1>
        </div>
        <div class="col">
          <h3>para: <span style="text-transform: uppercase;">{{$tipo->nombre}}</span></h3>
        </div>
      </div>
      <div class="col d-flex justify-content-around flex-wrap">
        @if($mesas)
        @foreach($mesas as $mesa)
        <div class="card m-2" style="width: 12rem; height:18rem;">
          <img src="{{secure_asset('assets/img/mesa.png')}}" class="card-img-top" alt="...">
          <hr>
          <h5 class="card-title">Nombre: {{$mesa -> nombre}}</h5>
          <p class="card-text">Capacidad: {{$mesa -> capacidad}}</p>
        </div>
        @endforeach
        @endif
      </div>
    </div>
  </div>
  <div id="sensible" class="container">
    <form class="form-group" action="{{ route('sociedad.crear',[$sociedad -> id, $tipo->id]) }}" method="get">
      @csrf
      <div class="d-flex pr-3 form-group justify-content-between">
        <label for="exampleInputPassword1" class="ml-3 justify-content-start">Fecha:</label>
        <input type="text" name="fecha" class="mr-3 justify-content-end" value="{{$fecha}}" readonly>
      </div>
      <div class="d-flex pr-3 form-group justify-content-between">
        <label for="exampleInputPassword1" class="ml-3 justify-content-start">Tipo:</label>
        <input type="text" name="tipo" class="mr-3 justify-content-end" value="{{$tipo->nombre}}" readonly>
      </div>
      <div class="d-flex form-group justify-content-between">
        <label for="exampleInputEmail1" class="ml-3 justify-content-start">Nº Personas</label>
        <input type="text" name="personas" class="mr-3 justify-content-end form-control border" style="width: 250px;" value="{{$personaEditar ?? ''}}">
      </div>
      <small class="form-text text-muted mb-3">Por favor no introduzca de más o de menos.</small>
      <!-- Según el número de mesas que tenga la sociedad registradas -->
      <div class="d-flex pr-3 form-group justify-content-between">
        <label for="exampleInputPassword1" class="ml-3 justify-content-start">Mesas:</label>
        <select style="width: 250px;" class="custom-select"name="mesa" id="mesa">
          <option value="..." selected>Elige...</option>
          @if($mesas)
            @foreach($mesas as $mesa)
              <option value="{{$mesa -> id}}">{{$mesa -> nombre}}</option>
          @endforeach
        @endif
        </select>
      </div>
      <button id="accion" type="submit" class="btn btn-primary reserva">Reservar</button>
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
      if ($('#mesa option:selected').text() === 'Elige...') {
        $('#accion').attr('disabled', 'disabled');
      } else {
        $('#accion').removeAttr('disabled');
      }
    });
  </script>
</div>
@endsection
