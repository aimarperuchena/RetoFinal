@extends('layouts.index')
@section('content')


<br><br><br><br><br>
<h1>Hola desde admin</h1>


<h1>Sociedad: {{$sociedad->nombre}}</h1>

<h3>Socios</h3>
<table>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Correo</th>
        <th>Telefono</th>
    </tr>

    @foreach($socios as $socio)
    <tr>
        <td>{{$socio->usuario_id}}</td>
    </tr>
    @endforeach

</table>

@endsection