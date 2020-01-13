@extends('layouts.app')
@section('content')

<br><br><br><br>
<div class="container text-center">
  <h1>Todas sus Reservas</h1>
  <ul class="list-group">
    @if($reservas)
      @foreach($reservas as $reserva)
      <li class="list-group-item d-flex justify-content-between align-items-center">
          Reserva: {{$reserva -> id}}
          <a class="badge badge-info badge-pill text-white ml-2" href="{{ route('reserva.show',$reserva->id) }}"><i class="fas fa-eye"></i></a>
        </li>
      @endforeach
    @else
      <li class="list-group-item d-flex justify-content-between align-items-center">
        Crear Reserva 
      <a class="btn btn-primary btn-lg mb-5" href="{{ route('sociedad.reserva',$sociedad -> id) }}" role="button">Listado Sociedades</a>
      </li>
    @endif
  </ul>
</div>
@endsection
