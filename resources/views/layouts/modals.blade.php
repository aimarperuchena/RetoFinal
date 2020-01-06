<!-- INICIO LOGIN MODAL -->
<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Iniciar Sesion</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">
                <div class="md-form mb-5">
                    <div class="col-md-6 form-modal">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                        <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email..."> @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span> @enderror
                    </div>
                </div>

                <div class="md-form mb-4">
                    <div class="col-md-6 form-modal">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                        <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password..."> @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span> @enderror
                    </div>
                </div>

                <div class="md-form mb-4">
                    <p id="login_email_error"> </p>
                    <p id="login_password_error"></p></p>
                </div>

            </div>
            <div class="modal-footer d-flex justify-content-center">
                <div class="col-md-8 offset-md-4 footer-modal">
                    <button id="login" type="submit" class="btn">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a> @endif
                </div>
            </div>


        </form>
    </div>
</div>
</div>
<!-- FIN LOGIN MODAL -->


<!-- INICIO REGISTRO MODAL-->

<div class="modal fade" id="modalRegistrerForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-3">
                <div class="md-form mb-5">
                    <div class="col-md-6 form-modal">
                        <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                        <input id="nombre_reg" type="text" class="@error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="name" autofocus placeholder="Name...">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span> @enderror
                    </div>

                </div>

                <div class="md-form mb-5">
                    <div class="col-md-6 form-modal">
                        <label for="apellido" class="col-md-4 col-form-label text-md-right">apellido</label>
                        <input id="apellido_reg" type="text" class="@error('apellido') is-invalid @enderror" name="apellido" value="{{ old('apellido') }}" required autocomplete="apellido" autofocus placeholder="apellido...">
                        @error('apellido')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span> @enderror
                    </div>

                </div>


                <div class="md-form mb-5">
                    <div class="col-md-6 form-modal">
                        <label for="telefono" class="col-md-4 col-form-label text-md-right">telefono</label>
                        <input id="telefono_reg" type="number" class="@error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono') }}" required autocomplete="telefono" autofocus placeholder="telefono...">
                        @error('telefono')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span> @enderror
                    </div>

                </div>


                <div class="md-form mb-4">
                    <div class="col-md-6 form-modal">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                        <input id="email_reg" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email...">
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
                    <p id="registro_name"></p></p>
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <div class="col-md-6 offset-md-4 footer-modal">
                    <button id="registro" type="submit" class="btn">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
