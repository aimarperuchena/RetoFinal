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
                            </tr>

                            @foreach($sociedad->usuarios as $socio)
                            <tr>
                                <td>
                                    {{$socio->id}}
                                </td>
                                <td>{{$socio->nombre}}</td>
                                <td>{{$socio->apellido}}</td>
                                <td>{{$socio->telefono}}</td>

                            </tr>
                            @endforeach


                        </table>
                           </div>
              </div>
              @endsection