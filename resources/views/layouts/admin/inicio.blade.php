@extends('layouts.admin.adminView')
@section('adminContent')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="{{ url('assets/js/jquery-3.4.1.min.js')}}"></script>
<script src="{{ url('assets/js/charts/lineasChart.js')}}"></script>
                    <!-- Content Row -->

       <div class="row">
            <div class="col-xl-8 col-lg-7">

            <div id="unidades" style="width: 900px; height: 300px;"></div>   
            <div id="importe" style="width: 900px; height: 300px;"></div> 
            </div>
       </div>
@endsection