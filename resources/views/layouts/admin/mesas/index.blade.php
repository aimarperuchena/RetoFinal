@extends('layouts.admin.adminView')
@section('adminContent')




           
                    <!-- Content Row -->

                    <div class="row">
                    <div class="col-xl-8 col-lg-7">
                    <h3>Mesas</h3>
                    @if(isset($error))
 
        <div class="alert alert-danger">
            <ul>
                
                <li>{{ $error }}</li>
                
            </ul>
        </div>
       
  @endif
<a href="/admin/mesaCreate" class="btn btn-primary">Crear Mesas</a><br><br>
<table class="table table-striped border">
<thead>
    <tr>
     
        <th>Nombre</th>
        <th>Capacidad</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </tr>
    </thead>
    @foreach($sociedad->mesas as $mesa)
    <tr>
       <td>{{$mesa->nombre}}</td>
        <td>{{$mesa->capacidad}}</td>
        <td><a href="/admin/mesaEdit/{{$mesa->id}}"><i class="fa fa-pencil" style="color:black"></i></a></td>
        <td><a href="/admin/mesaDestroy/{{$mesa->id}}"><i class="fa fa-trash-o" style="color:black"></i></a></td>

    </tr>
    @endforeach
</table>
                           </div>
              </div>
              @endsection