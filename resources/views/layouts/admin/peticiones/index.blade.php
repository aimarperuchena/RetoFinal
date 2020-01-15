@extends('layouts.admin.adminView')
@section('adminContent')





           
                    <!-- Content Row -->

                    <div class="row">
                    <div class="col-xl-8 col-lg-7">
                    <h3>Peticiones</h3>

<table class="table table-striped border">
<tHead>  
<tr>
     
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Estado</th>
        <th>Fecha</th>
        <th>Aceptar</th>
        <th>Denegar</th>
    </tr>
    </tHead>  
    @foreach($peticiones as $peticion)
    <tr>
       <td>{{$peticion->usuario->nombre}}</td>
        <td>{{$peticion->usuario->apellido}}</td>
        <td>{{$peticion->estado}}</a></td>
        <td>{{$peticion->created_at}}</td>
        <td><a href="/admin/peticionSociedadAceptar/{{$peticion->id}}"><i class="fas fa-check"></i></a></td>
<td><a href="/admin/peticionSociedadDenegar/{{$peticion->id}}"><i class="fas fa-times"></i></a></td>
    </tr>
    @endforeach
</table>
                           </div>
              </div>
              @endsection