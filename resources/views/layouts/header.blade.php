
<section class="header">
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
      <a href="#top"><img src="/assets\img\logo_alpha_white.png" width="50" height="50" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="contenido collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
              @if ($user = Auth::user())
              @if ($user->role_id === 3)
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{route('usuario.listado')}}">{{ __('multi.inicio') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{route('usuario.suscripciones')}}">{{ __('multi.suscripciones') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('sociedad.formAlta') }}">{{ __('multi.altasoci') }}</a>
                </li>
              @endif
              @if ($user->role_id === 2)
              <li class="nav-item">
                  <a class="nav-link text-white" href="{{route('admin.index')}}">{{ __('multi.inicio') }}</a>
              </li>
              @endif
              @if ($user->role_id === 1)
              <li class="nav-item">
                  <a class="nav-link text-white" href="{{route('webmaster.index')}}">{{ __('multi.inicio') }}</a>
              </li>
              @endif

              <!-- -------------------Perfil del usuario-------------------- -->
              <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small" style="text-transform: uppercase;">{{ $user->nombre }}</span>
                  <img class="img-profile rounded-circle" src="{{asset('assets/img/profile.jpg')}}">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="/perfil">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    {{ __('multi.perfil') }}
                  </a>
                  @if ($user->role_id === 3)
                    <a class="dropdown-item" href="/reservas">
                      <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                      {{ __('multi.reservas') }}
                    </a>
                    <a class="dropdown-item" href="{{ route('sociedad.formAlta') }}">
                      <i class="fas fa-plus-circle"></i>
                      {{ __('multi.altasoci') }}
                    </a>
                  @endif
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ route('logout') }}" data-toggle="modal" data-target="#logoutModal"onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    {{ __('Logout') }}
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
                </div>
              </li>
              @else
              <li class="nav-item active">
                  <a class="nav-link" href="#">{{ __('multi.inicio') }}
                      <span class="sr-only">(current)</span>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#nosotros">{{ __('multi.nosotros') }}</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#services">{{ __('multi.servicios') }}</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#contact">{{ __('multi.contactanos') }}</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" data-toggle="modal" data-target="#modalLoginForm">{{ __('multi.login') }}</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" data-toggle="modal" data-target="#modalRegistrerForm">{{ __('multi.registro') }}</a>
              </li>
              @endif
              <li class="nav-item">
                  <a class="badge badge-light mt-3 ml-1" href="/locale/es">Es</a>
              </li>
              <li class="nav-item">
                  <a class="badge badge-light mt-3 ml-1" href="/locale/en">En</a>
              </li>
              <li class="nav-item">
                  <a class="badge badge-light mt-3 ml-1" href="/locale/eus">Eu</a>
              </li>

          </ul>
      </div>
  </nav>
</section>
