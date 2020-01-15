<div class="d-flex text-center">
  <div id="filtroLista" class="">
    <div class="flotante">
      <h1>Filtrar</h1>
      <hr>
      <div class="form-group form-check text-left">
        <input type="checkbox" class="form-check-input" id="checkboxTodos" onclick='window.location.assign("{{route("usuario.listado")}}")'>
        <label class="form-check-label" for="exampleCheck1"><a href="{{route('usuario.listado')}}">Todas</a></label>
      </div>
      <div class="form-group form-check text-left">
        <input type="checkbox" class="form-check-input" id="checkboxTodos" onclick='window.location.assign("{{route("usuario.suscripciones")}}")'>
        <label class="form-check-label" for="exampleCheck1"><a href="{{route('usuario.suscripciones')}}">Mis Sociedades</a></label>
      </div>
    </div>
  </div>
  <div id="listaSociedad" class="d-flex flex-wrap mb-5">
    @if($todos)
      @if($sociedades ?? '')
        @foreach($sociedades ?? '' as $sociedad)
        <div class="card m-2" style="width: 18rem; height:18rem;">
          @if($sociedad)
            <a href="{{ route('sociedad.info', $sociedad -> id) }}"><img src="assets/img/Gaztelubide.jpeg" class="card-img-top" alt="..."></a>
          @endif
          <div class="card-body">
            <p class="card-text">{{$sociedad -> nombre}}</p>
          </div>
        </div>
        @endforeach
      @endif
    @endif
    @if($suscripciones ?? '' ?? '')
      @foreach( $suscripciones ?? '' as $suscripcion)
      <div class="card m-2" style="width: 18rem; height:18rem;">
        @if($suscripcion)
          <a href="{{ route('sociedad.info', $suscripcion -> id) }}"><img src="assets/img/Gaztelubide.jpeg" class="card-img-top" alt="..."></a>
        @endif
        <div class="card-body">
          <p class="card-text">{{$suscripcion->nombre}}</p>

        </div>
      </div>
      @endforeach
    @endif
  </div>
</div>
