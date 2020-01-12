@extends('layouts.webmaster.WMView')

@section('webmasterContent')
<!-- Content Row -->

<div class="row">
  <div class="col-xl-12 col-lg-7">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>ID usuario</th>
                <th>Nombre Usuario</th>
                <th>ID Sociedad</th>
                <th>Nombre Sociedad</th>
                <th>Suspender</th>

            </tr>
        </thead>
        <tbody>
            @foreach($socios as $socio)
                <tr>
                    <td>{!! $socio->id !!}</td>
                    <td>{!! $socio->user_id !!}</td>
                    <td></td>
                    <td>{!! $socio->sociedad_id !!}</td>
                    <td></td>
                    <td><a href=""><i class="fa fa-ban" style="color:black"></i></a></td>

                </tr>
            @endforeach
        </tbody>
    </table>
  </div>
</div>
@endsection


