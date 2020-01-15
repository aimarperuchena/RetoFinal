@extends('layouts.admin.adminView')
@section('adminContent')


                    <!-- Content Row -->

                    <div class="row">
                    <div class="col-xl-8 col-lg-7">
                    <h2>Socios</h2>
                        <table class="table table-striped">
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Telefono</th>
                                <th>Eliminar</th>
                            </tr>

                            @foreach($socios as $socio)
                            @foreach($sociedadUsuario as $usuario)
                            @if($socio->id==$usuario->user_id)
                            <tr>
                                <td>
                                    {{$socio->id}}
                                </td>
                                <td>{{$socio->nombre}}</td>
                                <td>{{$socio->apellido}}</td>
                                <td>{{$socio->telefono}}</td>
                                <td><a href="/admin/userDelete/{{$socio->id}}"><i class="fa fa-trash-o" style="color:black"></i></a></td>

                            </tr>
                            @endif
                            @endforeach
                            @endforeach


                        </table>
                           </div>
              </div>
              @endsection