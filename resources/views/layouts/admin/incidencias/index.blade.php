@extends('layouts.admin.adminView')
@section('adminContent')


                    <!-- Content Row -->

                    <div class="row">
                    <div class="col-xl-8 col-lg-7">
                    <h3>Incidencias</h3>
              <a href="/admin/createIncidencia">Crear Incidencia</a>
              <table class="table table-striped">
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
                           </div>
              </div>
              @endsection