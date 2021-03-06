<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="icon" type="img/png" href="{{ asset('assets\img\logo_alpha.png') }}">
</head>

<body>
<section class="header">
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">

      <a href="#top"><img src="{{ asset('assets\img\logo_alpha_white.png') }}" width="50" height="50" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="contenido collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">

              <li class="nav-item">
                  <a class="nav-link" >{{ Auth::user()->name }}</a>
              </li>

              <li class="nav-item">
              @guest

              @else




                                    <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                            </li>
                        @endguest


                <li class="nav-item">
                    <a href="{{ secure_asset('locale/es') }}"><img class="banderas" src="/assets/img/espania.ico"></a>
                </li>
                <li class="nav-item">
                    <a href="{{ secure_asset('locale/en') }}"><img class="banderas" src="/assets/img/reino_unido.ico"></a>
                </li>
                <li class="nav-item">
                    <a href="{{ secure_asset('locale/eus') }}"><img class="banderas" src="{{ asset('assets/img/pais_vasco.ico') }}"></a>
                </li>

          </ul>
      </div>
  </nav>
</section>
<section class="edit_user">
	<div class="card">
  	<div class="card-body">
    	<h5 class="card-title">Perfil de usuario</h5>
    	@if(Auth::user()->isAdmin())
        	<div class="div_usuario_editar">
    	@if(isset($usuario))
            	<form class="contact-form" action="{{route('admin.update')}}" method="post">
                	@csrf
                	<div class="form-group">
                	<span>{{ __('multi.pnombre') }}</span>

                    	<input id="nombre" type="text" class="form_edit_user" name="name" value=" {{ $usuario->name }}">
                    	@if($errors->has('name'))
                    	<div class="error">{{ $errors->first('name') }}</div>
                    	@endif
                	</div>

                	<div class="form-group">
                	<span>{{ __('multi.correo') }}</span>

                    	<input id="email" type="email" class="form_edit_user" name="email" value="{{ $usuario->email }}">
                    	@if($errors->has('email'))
                    	<div class="error">{{ $errors->first('email') }}</div>
                    	@endif
                	</div>
                	<div class="form-group">
                	<span>{{ __('multi.pass') }}</span>

                    	<input id="password" type="password" class="form_edit_user" name="password" placeholder="Password...">
                    	@if($errors->has('password'))
                    	<div class="error">{{ $errors->first('password') }}</div>
                    	@endif
                	</div>
                	<input type="hidden" name="id" value=" {{ $usuario->id }}">
                    <p id="error_email"></p>
                    <p id="error_pass"></p>
                    <p id="error_name"></p>
                	<button id="enviar" type="submit" class="btn btn-primary" name="Send">{{ __('multi.enviar') }}</button>
            	</form>
    	@endif
        	</div>
        	@else
        	<div class="div_admin">
          	<h3>No tienes acceso como administrador, por favor abandone ésta página.</h3>
        	</div>

        	@endif
  	</div>
	</div>
</section>




    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/jquery.backstretch.min.js') }}"></script>
    <script src="{{ asset('assets/js/validacion_editar.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>

</body>

</html>
