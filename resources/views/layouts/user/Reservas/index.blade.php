@extends('layouts.app')
@section('content')

<br><br><br><br>
<div class="container text-center">
 <h3>Realizar reserva</h3>
 <h3>Mesas</h3>
<table>
    <tr>
        <th>Id</th>
        <th>Capacidad</th>
    </tr>

    @foreach($mesas as $mesa)
    <tr>
        <td>{{$mesa->id}}</td>
        <td>{{$mesa->capacidad}}</td>
    </tr>
    @endforeach
</table>
  
</div>
@endsection
