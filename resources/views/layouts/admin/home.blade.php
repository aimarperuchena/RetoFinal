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
        <th>Socio</th>
        <th>Tipo</th>
        <th>Fecha</th>
        <th>Personas</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </tr>

    @foreach($sociedad->reservas as $reserva)
    <tr>
        <td>{{$reserva->usuario_id}}</td>
        <td>{{$reserva->tipo->nombre}}</td>
        <td>{{$reserva->fecha}}</td>
        <td>{{$reserva->personas}}</td>
        <td><i class="fa fa-pencil" style="color:black"></i></td>
        <td><i class="fa fa-trash-o" style="color:black"></td>
        <td><a href="/admin/reservaShow/{{$reserva->id}}"><i class="fa fa-eye" style="color:black"></i></a></td>
    </tr>
    @endforeach
</table>

<hr>
<h3>Mesas</h3>
<a href="/admin/mesaCreate">Crear Mesas</a>
<table>
    <tr>
        <th>Id</th>
        <th>Capacidad</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </tr>

    @foreach($sociedad->mesas as $mesa)
    <tr>
        <td>{{$mesa->id}}</td>
        <td>{{$mesa->capacidad}}</td>
        <td><a href="/admin/mesaEdit/{{$mesa->id}}"><i class="fa fa-pencil" style="color:black"></i></a></td>
        <td><a href="/admin/mesaDestroy/{{$mesa->id}}"><i class="fa fa-trash-o" style="color:black"></i></a></td>

    </tr>
    @endforeach
</table>

<hr>

<h3>Incidencias</h3>
<a href="/admin/createIncidencia">Crear Incidencia</a>
<table>
    <tr>
        <th>Id</th>
        <th>Descripcion</th>
        <th>Estado</th>
        <th>Fecha</th>
        <th>Editar</th>
        <th>Eliminar</th>

    </tr>
    @foreach($sociedad->incidencias as $incidencia)
    <tr>
        <td>{{$incidencia->id}}</td>
        <td>{{$incidencia->descripcion}}</td>
        <td>{{$incidencia->estado}}</td>
        <td>{{$incidencia->fecha}}</td>
        <td><a href="/admin/incidenciaEdit/{{$incidencia->id}}"><i class="fa fa-pencil" style="color:black"></i></a></td>
        <td><a href="/admin/incidenciaDelete/{{$incidencia->id}}"><i class="fa fa-trash-o" style="color:black"></i></a></td>

    </tr>
    @endforeach
</table>

<hr>
<h3>Productos</h3>
@if(isset($contador))
    <h1>{{$contador}}</h1>
@endif


<a href="/admin/productCreate/">Añadir Producto</a>
<table>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>Editar</th>
        <th>Eliminar</th>

    </tr>

    @foreach($sociedad->productos as $producto)
    <tr>
        <td>{{$producto->id}}</td>
        <td>{{$producto->producto->nombre}}</td>
        <td>{{$producto->precio}}</td>
        <td>{{$producto->stock}}</td>
        <td><a href="/admin/productEdit/{{$producto->id}}"><i class="fa fa-pencil" style="color:black"></i></a></td>
        <td><a href="/admin/productDestroy/{{$producto->id}}"><i class="fa fa-trash-o" style="color:black"></i></a></td>

    </tr>
    @endforeach
</table>
@endsection