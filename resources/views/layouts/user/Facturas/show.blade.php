@extends('layouts.app')
@section('content')

<br><br><br><br>
<div class="container text-center">
  <h1>Todas sus Facturas de la reserva ({{$reserva}})</h1>
  <ul class="list-group">
    @if (count($facturas) > 0)
      @foreach($facturas as $factura)
      <li class="list-group-item d-flex justify-content-between align-items-center">
          Factura: {{$factura -> id}}
          <a class="badge badge-info badge-pill text-white ml-2" href="{{ route('linea.show',$reserva) }}"><i class="fas fa-eye"></i></a>
        </li>
      @endforeach
    @else
      <h3 class="m-5">Crear Factura</h3>
      <a class="btn btn-primary btn-lg mb-5" href="{{ route('factura.create') }}" role="button">Crear</a>
    @endif
  </ul>
</div>

@endsection
