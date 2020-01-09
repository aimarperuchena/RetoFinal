@extends('layouts.admin.adminView')
@section('adminContent')
@extends('layouts.app')




           
                    <!-- Content Row -->

                    <div class="row">
                    <div class="col-xl-8 col-lg-7">
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
                           </div>
              </div>
              @endsection