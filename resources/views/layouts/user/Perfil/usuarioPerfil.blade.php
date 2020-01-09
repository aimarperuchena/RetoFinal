@extends('layouts.app')
@section('content')
<!-- Perfil de usuario -->
<div class="d-flex text-center">
  <div id="" class="mt-5 ml-5 mb-5">
    <div class="card" style="width: 18rem;">
      <img src="assets/img/profile.jpg" class="card-img-top" alt="fotoPerfil">
      <div class="card-body">
        <p class="card-text">Nombre Usuario</p>
      </div>
    </div>
  </div>
  <div id="tablaProfile" class="d-block flex-wrap m-5 row">
    <div class="">
      <h1 class="mb-5">Información personal</h1>
      <form>
        <div class="d-flex form-group justify-content-around">
          <label for="exampleInputEmail1">Nombre</label>
          <input type="text" class="form-control" style="width: 300px;"readonly>
        </div>
        <div class="d-flex form-group justify-content-around">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" style="width: 300px;"readonly>
        </div>
        <div class="d-flex form-group justify-content-around">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" style="width: 300px;" readonly>
        </div>
        <button type="submit" class="btn btn-primary">Editar</button>
      </form>
    </div>
    <hr class="m-5">
    <div class="">
      <h1 class="mb-5">Suscripciones</h1>
      <ul>
        <li>aaaaa</li>
        <li>bbbbb</li>
        <li>ccccc</li>
      </ul>
    </div>
  </div>
</div>

@endsection
