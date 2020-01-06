@extends('layouts.index')
@section('content')
<br><br><br><br><br>

<div class="d-flex text-center">
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
    <div class="d-flex col-md-2 offset-md-5">
      <label>Día:</label><input type="text" name="fecha" id="fecha" class="form-control" placeholder="dd/mm/yyyy" readonly>
    </div>
  </div>
</div>
@endsection
