@extends('layouts.app')
@section('content')

<br><br><br><br>
<div class="container text-center">
  <h1 class="mb-5">Todas sus Facturas de la reserva ({{$reserva}})</h1>
    @if (count($facturas) > 0)
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">ID</th>
          <th scope="col">Info</th>
        </tr>
      </thead>
      @foreach($facturas as $factura)
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>{{$factura -> id}}</td>
              <td><a class="badge badge-info badge-pill text-white ml-2" href="{{ route('linea.show',$factura->id) }}"><i class="fas fa-eye"></i></a></td>
            </tr>
          </tbody>
      @endforeach
    </table>
    @else
      <h3 class="m-5">Crear Factura</h3>
      <a class="btn btn-primary btn-lg mb-5" href="{{ route('factura.create',$reserva) }}" role="button">Crear</a>
    @endif
</div>

@endsection
