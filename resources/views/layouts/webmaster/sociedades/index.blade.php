@extends('layouts.index')
@section('content')
@include('layouts.webmaster.WMasterView')

<table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Ubicacion</th>
                            <th>Telefono</th>
                            <th>ID Administrador</th>
                            <th>Suspender</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($soci as $sociedad)
                            <tr>
                                <td>{!! $sociedad->id !!}</td>
                                <td>{!! $sociedad->nombre !!}</td>
                                 <td>{!! $sociedad->ubicacion !!}</td>
                                 <td>{!! $sociedad->telefono !!}</td>
                                 <td>{!! $sociedad->administrador_id !!}</td>
                                 <td><a href=""><i class="fa fa-ban" style="color:black"></i></a></td>


                            </tr>
                        @endforeach
                    </tbody>
                </table>
@endsection
