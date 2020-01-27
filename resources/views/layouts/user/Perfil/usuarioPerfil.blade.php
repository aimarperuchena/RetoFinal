@extends('layouts.index')
@section('content')
<br><br>
<!-- Perfil de usuario -->
<div class="container">
  <div class="row p-5">
    <div class="col-12 col-md-6 col-lg-6 justify-conten-center">
      <div class="card asaa" style="width: 18rem;">
        <img src="{{url('assets/img/profile.jpg')}}" class="card-img-top" alt="fotoPerfil">
        <div class="card-body">
          <p class="card-text">{{$user->nombre}}</p>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-6">
      <div class="">
        <div class="">
          <h1 class="mb-5">Información personal</h1>
          <form class="form-group">
            <div class="d-flex form-group justify-content-around">
              <label for="exampleInputEmail1">Nombre</label>
              <input type="text" class="form-control" style="width: 300px;" readonly value="{{$user->nombre}}">
            </div>
            <div class="d-flex form-group justify-content-around">
              <label for="exampleInputEmail1">Apellido</label>
              <input type="text" class="form-control" style="width: 300px;" readonly value="{{$user->apellido}}">
            </div>
            <div class="d-flex form-group justify-content-around">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" class="form-control" style="width: 300px;" readonly value="{{$user->email}}">
            </div>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary reserva" data-toggle="modal" data-target="#exampleModal">
              Editar
            </button>
          </form>
        </div>
      </div>
    </div>
    </div>
    <div class="text-center mb-5">
      <hr class="m-5">
      @if ($user->role_id === 3)
      <div class="">
        <h1 class="mb-5">Suscripciones</h1>
        <ul class="list-group">
          @foreach ($sociedadSocio as $socio)
          @foreach($sociedades as $sociedad)
          @if($socio->sociedad_id==$sociedad->id)
          <li class="list-group-item d-flex justify-content-between align-items-center">
            {{$sociedad -> nombre}}
            <a class="badge badge-danger badge-pill text-white" href="{{ route('profile.deleteSus',$sociedad -> id)}}"><i class="fas fa-minus-circle"></i></a>
          </li>
          @endif
          @endforeach
          @endforeach
        </ul>
      </div>
      @endif
    </div>
</div>


<!-- Modal editar usuario -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Editar Usuario</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <form class="class=" action="{{route('profile.update')}}" method="post">
          @csrf
          <div class="md-form mb-5">
            <div class="col-md-6 form-modal">
              <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
              <input id="nombre_reg" type="text" class="@error('nombre') is-invalid @enderror" name="nombre" required autocomplete="name" autofocus value="{{$user->nombre}}">
              @error('name')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span> @enderror
            </div>
          </div>
          <div class="md-form mb-5">
            <div class="col-md-6 form-modal">
              <label for="apellido" class="col-md-4 col-form-label text-md-right">apellido</label>
              <input id="apellido_reg" type="text" class="@error('apellido') is-invalid @enderror" name="apellido" required autocomplete="apellido" autofocus value="{{$user->apellido}}">
              @error('apellido')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span> @enderror
            </div>
          </div>
          <div class="md-form mb-5">
            <div class="col-md-6 form-modal">
              <label for="telefono" class="col-md-4 col-form-label text-md-right">telefono</label>
              <input id="telefono_reg" type="number" class="@error('telefono') is-invalid @enderror" name="telefono" required autocomplete="telefono" autofocus value="{{$user->telefono}}">
              @error('telefono')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span> @enderror
            </div>
          </div>
          <div class="md-form mb-4">
            <div class="col-md-6 form-modal">
              <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
              <input id="email_reg" type="email" class="@error('email') is-invalid @enderror" name="email" required autocomplete="email" value="{{$user->email}}">
              @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span> @enderror
            </div>
          </div>
          <div class="md-form mb-4">
            <div class="col-md-6 form-modal">
              <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
              <input id="password_reg" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password...">
              @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span> @enderror
            </div>
          </div>
          <div class="md-form mb-4">
            <div class="col-md-6 form-modal">
              <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
              <input id="password-confirm_reg" type="password" class="" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password...">
            </div>
          </div>
          <div class="md-form mb-4">
            <p id="registro_email_error"> </p>
            <p id="registro_password_error"></p>
            <p id="registro_name"></p>
            </p>
          </div>
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <div class="col-md-6 offset-md-4 footer-modal">
          <button id="registro" type="submit" class="btn">
            Confirmar
          </button>
        </div>
      </div>
      </form>
    </div>
  </div>
</div>
@endsection
