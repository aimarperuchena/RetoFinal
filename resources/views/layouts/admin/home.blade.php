@extends('layouts.index')
@section('content')
<br>
<br>
<br>

<h1> {{$sociedad->nombre}}</h1>
<hr>
<h2>Socios</h2>
<table>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Apellido</th>
    </tr>

    @foreach($sociedad->usuarios as $socio)
    <tr>
        <td>
            {{$socio->id}}
        </td>
        <td>{{$socio->nombre}}</td>
        <td>{{$socio->apellido}}</td>
    </tr>
    @endforeach


</table>
<hr>

<h3>Reservas</h3>
<table>
    <tr>
        <td>Socio</td>
        <td>Tipo</td>
        <td>Fecha</td>
        <td>Personas</td>
    </tr>

    @foreach($sociedad->reservas as $reserva)
    <tr>
        <td>{{$reserva->usuario_id}}</td>
        <td>{{$reserva->tipo->nombre}}</td>
        <td>{{$reserva->fecha}}</td>
        <td>{{$reserva->personas}}</td>
    </tr>
    @endforeach
</table>

<hr>
<h3>Mesas</h3>
<table>
    <tr>
        <th>Id</th>
        <th>Capacidad</th>
    </tr>

    @foreach($sociedad->mesas as $mesa)
    <tr>
        <td>{{$mesa->id}}</td>
        <td>{{$mesa->capacidad}}</td>
    </tr>
    @endforeach
</table>

<hr>

<h3>Incidencias</h3>
<table>
    <tr>
        <th>Id</th>
        <th>Descripcion</th>
        <th>Estado</th>
        <th>Fecha</th>
    </tr>
    @foreach($sociedad->incidencias as $incidencia)
    <tr>
        <td>{{$incidencia->id}}</td>
        <td>{{$incidencia->descripcion}}</td>
        <td>{{$incidencia->estado}}</td>
        <td>{{$incidencia->fecha}}</td>
    </tr>
    @endforeach
</table>

<hr>
<h3>Productos</h3>
<table>
    <tr>
        <th>Id</th>
    <th>Nombre</th>
        <th>Precio</th>
        <th>Stock</th>
    </tr>

    @foreach($sociedad->productos as $producto)
    <tr>
        <td>{{$producto->id}}</td>
        <td>{{$producto->producto->nombre}}</td>
        <td>{{$producto->precio}}</td>
        <td>{{$producto->stock}}</td>
    </tr>
    @endforeach
</table>
@endsection