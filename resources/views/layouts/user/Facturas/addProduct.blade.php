@extends('layouts.app')
@section('content')
<td><select class="form-control" name="producto">
      <option>Seleccione...</option>
      @if($reserva->sociedad->productos)
        @foreach($reserva->sociedad->productos as $producto)
          <option value="{{$producto->producto_id}}">{{$producto->producto->nombre}}</option>
        @endforeach
      @endif
    </select></td>
<td><input type="number" name="cantidad" value="0" class="form-control"></td>
@endsection
