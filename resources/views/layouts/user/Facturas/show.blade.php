@extends('layouts.app')
@section('content')

<br><br><br><br>
<div class="container text-center">
  <h1>Todas sus Facturas de la reserva ({{$reserva}})</h1>
  <ul class="list-group">
    @if ($facturas)
      @foreach($facturas as $factura)
      <li class="list-group-item d-flex justify-content-between align-items-center">
          Factura: {{$factura -> id}}
          <a class="badge badge-info badge-pill text-white ml-2" href="{{ route('linea.show',$reserva) }}"><i class="fas fa-eye"></i></a>
        </li>
      @endforeach
    @else
      <h1>Crear Factura para la reserva con id {{$reserva}}</h1>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#">Crear</button>
    @endif
  </ul>
</div>

@endsection