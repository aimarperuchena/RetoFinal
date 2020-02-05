@extends('layouts.app')
@section('content')

<br><br><br><br>
<div class="container text-center">
  <h1 class="mb-5">{{ __('multi.todasreservas') }}</h1>
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">ID</th>
        <th scope="col">{{ __('multi.fecha') }}</th>
        <th scope="col">{{ __('multi.tipocomida') }}</th>
        <th scope="col">{{ __('multi.socitabla') }}</th>
        <th scope="col">{{ __('multi.infotabla') }}</th>
        <th scope="col">{{ __('multi.edittabla') }}</th>
        <th scope="col">{{ __('multi.eliminartabla') }}</th>
      </tr>
    </thead>
    @if(isset($reservas))
      @foreach($reservas as $reserva)
        <tbody>
          <tr>
            <th scope="row">#</th>
            <td>{{$reserva -> id}}</td>
            <td>{{$reserva->fecha}}</td>
            <td>{{$reserva->tipo->nombre}}</td>
            <td>{{$reserva->sociedad->nombre}}</td>
            <td><a class="badge badge-info badge-pill text-white ml-2" href="{{ route('reserva.show',$reserva->id) }}"><i class="fas fa-eye"></i></a></td>
            @if (!$reserva->factura)
              <td><a class="badge badge-info badge-pill text-white ml-2" href="{{ route('reserva.edit',$reserva->id) }}"><i class="fas fa-pencil-alt"></i></a></td>
            @else
              <td></td>
            @endif
            <td><a class="badge badge-info badge-pill text-white ml-2" href="{{ route('reserva.delete',$reserva->id) }}"><i class="fas fa-minus-circle"></i></i></a></td>
          </tr>
        </tbody>
      @endforeach
    </table>
    @else
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Error</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>{{$reserva -> id}}</td>
        </tr>
      </tbody>
    </table>
    <a class="btn btn-primary btn-lg" href="{{ route('usuario.listado') }}" role="button">{{ __('multi.listadosoci') }}</a>
    @endif
</div>
@endsection
