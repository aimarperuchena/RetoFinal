<div class="container">
  <div class="row">
    <div class="col">
      <div class="input-group mb-3 justify-content-center">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-search"></i></span>
        </div>
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
      </div>
      <div id="listaSociedad" class="d-flex flex-wrap mb-5 justify-content-center">
        @if($todos)
          @if($sociedades ?? '')
            @foreach($sociedades ?? '' as $sociedad)
            <div class="card m-2" style="width: 18rem; height:18rem;">
              @if($sociedad)
                <a href="{{ route('sociedad.info', $sociedad -> id) }}"><img src="assets/img/Gaztelubide.jpeg" class="card-img-top" alt="..."></a>
              @endif
              <div class="card-body">
                <p class="card-text">{{$sociedad -> nombre}}</p>
              </div>
            </div>
            @endforeach
          @endif
        @endif
        @if($suscripciones ?? '' ?? '')
          @foreach( $suscripciones ?? '' as $suscripcion)
          <div class="card m-2" style="width: 18rem; height:18rem;">
            @if($suscripcion)
              <a href="{{ route('sociedad.info', $suscripcion -> id) }}"><img src="assets/img/Gaztelubide.jpeg" class="card-img-top" alt="..."></a>
            @endif
            <div class="card-body">
              <p class="card-text">{{$suscripcion->nombre}}</p>

            </div>
          </div>
          @endforeach
        @endif
      </div>
    </div>
  </div>
</div>
<script>
function myFunction() {
  var input, filter, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  card = document.getElementsByClassName('card');
  for (i = 0; i < card.length; i++) {
    text = card[i].getElementsByClassName("card-text")[0];
    if (text) {
      txtValue = text.textContent || text.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        card[i].style.display = "";
      } else {
        card[i].style.display = "none";
      }
    }
  }
}
</script>
