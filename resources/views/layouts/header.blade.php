
<section class="header">
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
      <a href="#top"><img src="assets\img\logo_alpha_white.png" width="50" height="50" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="contenido collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
              @if ($user = Auth::user())
                <li class="nav-item">
                    <a class="nav-link" >{{ $user->name }}</a>
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
                  <a href="{{ url('locale/es') }}"><img class="banderas" src="assets/img/espania.ico"></a>
              </li>
              <li class="nav-item">
                  <a href="{{ url('locale/en') }}"><img class="banderas" src="assets/img/reino_unido.ico"></a>
              </li>
              <li class="nav-item">
                  <a href="{{ url('locale/eus') }}"><img class="banderas" src="assets/img/pais_vasco.ico"></a>
              </li>

          </ul>
      </div>
  </nav>
</section>
