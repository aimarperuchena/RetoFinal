@extends('layouts.index')
@section('content')


<section class="body">
  <div class="intro-banner pl-5">
    <h1 class="display-1">Gastro-Society</h1>
    <p class="h4">{{ __('multi.titulo4') }}</p>
  </div>
    <div id="nosotros" class="about">
        <div class="row p-5">
            <div class="col aboutImg">
                <div class="card" style="width: 25rem;">
                    <img src="assets\img\aboutUs.jpg" class="card-img-top" alt="Sobre Nosotros">
                    <div class="card-body">
                        <p class="card-text">Gastro-Society</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <h2>{{ __('multi.nosotros') }}</h2>
                <p>{{ __('multi.descripcion1') }}</p>
                <p>{{ __('multi.descripcion2') }}</p>
            </div>
        </div>
    </div>
    <div id="services">
        <div class="container">
            <h1>{{ __('multi.servicios') }}</h1>
            <div class="row services">
                <div class="col-md-3 text-center">
                    <div class="icon">
                        <i class="fas fa-tasks"></i>
                    </div>
                    <h3>{{ __('multi.reservas_title') }}</h3>
                    <p>{{ __('multi.reservas') }}</p>
                </div>
                <div class="col-md-3 text-center">
                    <div class="icon">
                        <i class="fa fa-check-circle"></i>
                    </div>
                    <h3>{{ __('multi.stock_title') }}</h3>
                    <p>{{ __('multi.stock') }}</p>
                </div>
                <div class="col-md-3 text-center">
                    <div class="icon">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3>{{ __('multi.contabilidad_title') }}</h3>
                    <p>{{ __('multi.contabilidad') }}</p>
                </div>
                <div class="col-md-3 text-center">
                    <div class="icon">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <h3>{{ __('multi.incidencias_title') }}</h3>
                    <p>{{ __('multi.incidencias') }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="mapa">
        <h2>{{ __('multi.localiza') }}</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13810.649339936816!2d-1.986587800278839!3d43.307321967731774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd51affe3b68fe15%3A0xe43ec55994864649!2zU2FuIFNlYmFzdGnDoW4sIEd1aXDDunpjb2E!5e0!3m2!1ses!2ses!4v1574411863455!5m2!1ses!2ses" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>

<h3 class="sociedades_confian">{{ __('multi.sociedad_confia') }}</h3>
<div class="sociedades">
<div class="card sociedad" style="width: 18rem;">
  <img src="assets\img\sociedad1.jpg" class="card-img-top img-card" alt="...">
  <div class="card-body">
    <h5 class="card-title">Abandotarra K.E</h5>
  </div>
</div>
<div class="card sociedad" style="width: 18rem;">
  <img src="assets\img\sociedad2.jpg" class="card-img-top img-card" alt="...">
  <div class="card-body">
    <h5 class="card-title">Abarketa</h5>

  </div>
</div>
<div class="card sociedad" style="width: 18rem;">
  <img src="assets\img\sociedad3.jpg" class="card-img-top img-card" alt="...">
  <div class="card-body">
    <h5 class="card-title">Abendaño</h5>

  </div>
</div>

</div>



    <div id="contact">
        <div class="container">
            <h1>{{ __('multi.contactanos') }}</h1>
            <div class="row">
                <div class="col-md-6">
                    <form class="contact-form" action="{{route('contact.save')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <input id="contact_name" type="text" class="form-control" name="name" placeholder="{{ __('multi.pnombre') }}">
                            @if($errors->has('name'))
                            <div class="error">{{ $errors->first('name') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <input id="phone" type="number" class="form-control" name="phone" placeholder="{{ __('multi.pnumero') }}">
                            @if($errors->has('phone'))
                            <div class="error">{{ $errors->first('phone') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <input id="contact_email" type="email" class="form-control" name="email" placeholder="{{ __('multi.correo') }}">
                            @if($errors->has('email'))
                            <div class="error">{{ $errors->first('email') }}</div>
                            @endif
                        </div>

                        <div class="form-group">
                            <textarea id="text_area" class="form-control" rows="4" name="message" placeholder="{{ __('multi.pmensaje') }}"></textarea>
                            @if($errors->has('message'))
                            <div class="error">{{ $errors->first('message') }}</div>
                            @endif
                        </div>
                     <p id="contact_name">aa</p>
                     <p id="contact_phone"></p>
                     <p id="contact_email"></p>
                     <p id="contact_message"></p>
                        <button id="enviar" type="submit" class="btn btn-primary" name="Send">{{ __('multi.enviar') }}</button>
                    </form>
                </div>
                <div class="col-md-6 contact-info">
                    <div class="follow"><b>{{ __('multi.direccion') }}:</b><i class="fa fa-map-marker"></i> {{ __('multi.dcalle') }}</div>
                    <div class="follow"><b>{{ __('multi.telefono') }}:</b><i class="fa fa-phone"></i> 123456789</div>
                    <div class="follow"><b>{{ __('multi.correo') }}</b><i class="fa fa-envelope"></i> localhost@gmail.com</div>
                    <div class="follow">
                        <label><b>{{ __('multi.redes') }}:</b></label>
                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-google-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
