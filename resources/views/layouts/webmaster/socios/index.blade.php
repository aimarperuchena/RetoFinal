@extends('layouts.index')
@section('content')
@include('layouts.webmaster.WMasterView')

<table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre Usuario</th>
                            <th>ID usuario</th>
                            <th>Nombre Sociedad</th>
                            <th>ID Sociedad</th>
                            <th>Suspender</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($socios as $socio)
                            <tr>
                                <td>{!! $socio->id !!}</td>
                                <td></td>
                                <td>{!! $socio->user_id !!}</td>
                                <td></td>
                                <td>{!! $socio->sociedad_id !!}</td>
                                <td><a href=""><i class="fa fa-ban" style="color:black"></i></a></td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
@endsection
