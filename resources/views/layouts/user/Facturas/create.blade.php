@extends('layouts.app')
@section('content')

<br><br><br><br>
<!-- Content Row -->
<div class="container">
  <div class="row">
      <div class="col-xl-6 col-lg-7">
        <h5 style="color:red;">{{$error ?? ''}}</h5>
        @if(!is_null($factura ?? ''))
          <h3>{{ __('multi.factura') }}</h3>

          <table class="table table-striped border">
              <thead>
              <tr>
                  <th>{{ __('multi.fecha') }}</th>
                  <th>{{ __('multi.personas') }}</th>
                  <th>{{ __('multi.importe') }}</th>
              </tr>
              </thead>
              <tr>
                  <td>{{$factura ->fecha}}</td>
                  <td>{{$factura ->personas}}</td>
                  <td>{{$factura ->importe}}</td>
              </tr>
            <br>
          </table>
          @endif
      </div>
      <div class="col-xl-4 col-lg-7">
        <h3>{{ __('multi.linafactura') }}</h3>
        <table class="table table-striped border ">
          <thead>
            <tr>
                <th>{{ __('multi.nomform') }}</th>
                <th>{{ __('multi.descform') }}</th>
                <th>{{ __('multi.uniform') }}</th>
                <th>{{ __('multi.importe') }}</th>
                <th>{{ __('multi.edittabla') }}</th>
                <th>{{ __('multi.eliminartabla') }}</th>
            </tr>
          </thead>
          @if(!is_null($factura->lineas))
            @foreach($factura->lineas as $linea)
              <tr>
                 <td>{{$linea->producto->producto->nombre}}</td>
                 <td>{{$linea->producto->producto->descripcion}}</td>
                  <td>{{$linea->unidades}}</td>
                  <td>{{$linea->importe}}</td>
                  <td><a href="/admin/lineaEdit/{{$linea->id}}"><i class="fa fa-pencil" style="color:black"></i></a></td>
                  <td><a href="/admin/deleteLinea/{{$linea->id}}"><i class="fa fa-trash-o" style="color:black"></i></a></td>
              </tr>
            @endforeach
          @endif
        </table>
        <a class="btn btn-primary"  href="{{ route('linea.create',$factura->id)}}">{{ __('multi.addline') }} </a>
      </div>
  </div>
</div>
@endsection
