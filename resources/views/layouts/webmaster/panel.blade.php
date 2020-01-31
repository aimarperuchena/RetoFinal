@extends('layouts.webmaster.WMView')
@section('webmasterContent')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="{{ url('assets/js/jquery-3.4.1.min.js')}}"></script>
<script src="{{ url('assets/js/charts/productosChart.js')}}"></script>
<script src="{{ url('assets/js/charts/accesosChart.js')}}"></script>
<script src="{{ url('assets/js/charts/sociosChart.js')}}"></script>


<br>
<div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                        <div class="title-xs font-weight-bold text-primary text-uppercase mb-1">Accesos {{$usuarios}}</div>

                        </div>
                        <div class="col-auto">

                            <i class="fas fa-book fa-2x text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                        <div class="title-xs font-weight-bold text-primary text-uppercase mb-1">Sociedades {{$sociedades}}</div>

                        </div>
                        <div class="col-auto">

                            <i class="fas fa-warehouse fa-2x text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                        <div class="title-xs font-weight-bold text-primary text-uppercase mb-1">Socios {{$socios}}</div>

                        </div>
                        <div class="col-auto">

                            <i class="fas fa-users fa-2x text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                        <div class="title-xs font-weight-bold text-primary text-uppercase mb-1">Productos {{$productos}}</div>

                        </div>
                        <div class="col-auto">
                            <i class="fas fa-cocktail fa-2x text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="row">

        <div class="col-xl-12 col-lg-12">

             <div id="accesos" style="width: 1000px; height: 500px;"></div>
        </div>

        <div class="col-xl-6 col-lg-6">

            <div id="socios" style="width: 600px; height: 300px;"></div>
       </div>

    <div class="col-xl-6 col-lg-6">

        <div id="productos" style="width: 600px; height: 300px;"></div>
    </div>
   </div>

@endsection

