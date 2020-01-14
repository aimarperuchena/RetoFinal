@extends('layouts.webmaster.WMView')

@section('webmasterContent')
<!-- Content Row -->

<div class="row">
  <div class="col-xl-12 col-lg-7">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>ID Sociedad</th>
                <th>ID usuario</th>
                <th>Estado</th>
                <th>Fecha solicitada</th>
                <th>Aceptar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($soci as $sociedad)
                <tr>
                    <td>{!! $sociedad->id !!}</td>
                    <td>{!! $sociedad->sociedad_id !!}</td>
                    <td>{!! $sociedad->usuario_id !!}</td>
                    <td>{!! $sociedad->estado !!}</td>
                    <td>{!! $sociedad->created_at !!}</td>
                    <td><a href="/webmaster/sociDestroy/{{$sociedad->id}}"><i class="fa fa-toggle-on" style="color:black"></i></a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
  </div>
</div>
@endsection

