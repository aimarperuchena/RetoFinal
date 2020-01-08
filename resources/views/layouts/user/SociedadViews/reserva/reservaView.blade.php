@extends('layouts.index')
@section('content')
<br><br><br><br><br>

<div class="d-flex text-center flex-wrap">
  <div class="mb-5 ml-5 col">
    <h1>Mesas</h1>
    <div class="jumbotronm d-flex flex-wrap" style="width: 50rem;">
      <div class="card m-2" style="width: 12rem;">
        <img src="assets/img/mesa.png" class="card-img-top" alt="...">
        <hr>
        <h5 class="card-title">Capacidad</h5>
        <p class="card-text">5</p>
      </div>
      <div class="card m-2" style="width: 12rem;">
        <img src="assets/img/mesa.png" class="card-img-top" alt="...">
        <hr>
        <h5 class="card-title">Capacidad</h5>
        <p class="card-text">6</p>
      </div>
      <div class="card m-2" style="width: 12rem;">
        <img src="assets/img/mesa.png" class="card-img-top" alt="...">
        <hr>
        <h5 class="card-title">Capacidad</h5>
        <p class="card-text">4</p>
      </div>
      <div class="card m-2" style="width: 12rem;">
        <img src="assets/img/mesa.png" class="card-img-top" alt="...">
        <hr>
        <h5 class="card-title">Capacidad</h5>
        <p class="card-text">8</p>
      </div>
    </div>
  </div>
  <div class="col">
    <h1>Reserva</h1>
     <form class="mt-5 mr-5">
       <div class="d-flex form-group justify-content-between">
         <label for="exampleInputEmail1" class="ml-3 justify-content-start">Nº Personas</label>
         <input type="number" style="width: 250px;" class="form-control ">
       </div>
       <small class="form-text text-muted mb-3">Por favor no introduzca de más o de menos.</small>
       <div class="d-flex pr-3 form-group justify-content-between">
         <label for="exampleInputPassword1" class="ml-3 justify-content-start">Date:</label>
         <input type="date" id="date" class="mr-3 justify-content-end">
       </div>
       <!-- Según el número de mesas que tenga la sociedad registradas -->
       <div class="d-flex pr-3 form-group justify-content-between">
         <label for="exampleInputPassword1" class="ml-3 justify-content-start">Mesa:</label>
         <select style="width: 250px;" class="form-control">
           <option value=".." selected>Elige..</option>
           <option value="1">Mesa 1</option>
           <option value="2">Mesa 2</option>
           <option value="3">Mesa 3</option>
           <option value="4">Mesa 4</option>
         </select>
       </div>
       <button type="submit" class="btn btn-primary">Reservar</button>
     </form>
  </div>
</div>
@endsection
