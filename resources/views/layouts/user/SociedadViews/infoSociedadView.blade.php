@extends('layouts.index')
@section('content')
<br><br><br><br><br>

<div class="d-flex text-center">
  <div class="d-flex flex-wrap mb-5 ml-5">
    <div class="m-2" style="width: 50rem;">
      <a href="#"><img src="assets/img/Gaztelubide.jpeg" class="card-img-top" alt="..."></a>
    </div>
  </div>
  <div class="container">
    <h1>GazteBideluze</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <div class="mapaSociedad">
        <h2>{{ __('multi.localiza') }}</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13810.649339936816!2d-1.986587800278839!3d43.307321967731774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd51affe3b68fe15%3A0xe43ec55994864649!2zU2FuIFNlYmFzdGnDoW4sIEd1aXDDunpjb2E!5e0!3m2!1ses!2ses!4v1574411863455!5m2!1ses!2ses" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
    <!-- aparece si esta suscrito -->
    <a class="btn btn-primary btn-lg mb-5" href="{{ route('sociedad.reserva') }}" role="button">Reserva</a>
  </div>
</div>

@endsection

<!-- <div class="d-flex text-center">
  <div class="d-flex flex-wrap mb-5 ml-5">
    <div class="jumbotronm d-flex" style="width: 50rem;">
      <div class="card m-2" style="width: 18rem;">
        <img src="assets/img/mesa.png" class="card-img-top" alt="...">
      </div>
      <div class="card m-2" style="width: 18rem;">
        <img src="assets/img/mesa.png" class="card-img-top" alt="...">
      </div>
      <div class="card m-2" style="width: 18rem;">
        <img src="assets/img/mesa.png" class="card-img-top" alt="...">
      </div>
      <div class="card m-2" style="width: 18rem;">
        <img src="assets/img/mesa.png" class="card-img-top" alt="...">
      </div>
    </div>
  </div>
  <div class="container">
    <form>
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="input-group date" data-provide="datepicker">
          <input type="text" class="form-control">
          <div class="input-group-addon">
              <span class="glyphicon glyphicon-th"></span>
          </div>
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>  </div>
</div>
 -->
