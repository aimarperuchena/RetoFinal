@extends('layouts.admin.adminView')
@section('adminContent')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="/assets/js/jquery-3.4.1.min.js"></script>
<script src="/assets/js/charts/lineasChart.js"></script>
<script src="/assets/js/charts/reservasChart.js"></script>

<!-- Content Row -->

<div class="row">
<div class="container">
<div class=""></div>
     <div class="col-xl-12 col-lg-12 justify-content-center text-center">

     <div id="dashboard">
     <h3>Reservas</h3>
    <div id="chart_div"></div>
    <div id="control_div"></div>
    <p><span id='dbgchart'></span></p>
</div>
     <br><br><br>
     </div>

     <h3 class="text-center">Ventas</h3>
<div class="row">
     <div class="col-md-6 col-sm-12 col-xs-12">

          <div id="unidades" style="width: 500px; height: 300px;"></div>
     </div>
     <div class="col-md-6 col-sm-12 col-xs-12">

          <div id="importe" style="width: 500px; height: 300px;"></div>
     </div>
     </div>
</div>
</div>
</div>
@endsection
