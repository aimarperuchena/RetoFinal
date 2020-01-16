@extends('layouts.webmaster.WMView')

@section('webmasterContent')
<br><br>
<div class="col-lg-12 " aria-setsize="10">
<form class="form-inline border border-dark ml-auto">

    <select name="tipo" class="form-control font-weight-bold mr-sm-2 col-lg-1.5" id="exampleFormControlSelect1">
      <option>Buscar por tipo</option>
      <option>nombre</option>
      <option>email</option>
      <option>telefono</option>
    </select>

    <input name="buscar" class="form-control input-lg col-lg-9" type="search" aria-label="Search">
    <button class="btn btn-outline-success ml-auto font-weight-bold my-2 my-sm-0 col-lg-1.5" type="submit">Buscar</button>
  </form>

</div>
<br><br>
<div class="row">
  <div class="col-xl-12 col-lg-7">
    <table class="table">
        <thead>
            <tr>
                <th>ID Usuario</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Telefono</th>
                <th>Alta/Baja</th>
            </tr>
        </thead>
        <tbody>
            @foreach($soci as $sociedad)
                <tr>
                    <td>{!! $sociedad->id !!}</td>
                    <td>{!! $sociedad->nombre !!}</td>
                    <td>{{ !empty($sociedad->users) ? $sociedad->users->email:'' }}</td>
                    <td>{!! $sociedad->telefono !!}</td>
                    @if ($sociedad->deleted_at===null)
                    <td><a id="w3s" href="/webmaster/sociDestroy/{{$sociedad->id}}"><i class="fas fa-thumbs-down" style="color:black"></i></a></td>
                    @else
                    <td><a id="w3s" href="/webmaster/sociRestore/{{$sociedad->id}}"><i class="fas fa-thumbs-up" style="color:black"></i></a></td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>
  </div>
</div>
@endsection

