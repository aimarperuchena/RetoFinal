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
                        <div class="title-xs font-weight-bold text-primary text-uppercase mb-1">Accesos Hoy {{$usuarios}}</div>

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

<div class="container-fluid">

            <div class="col-xs-12 col-md-12 col-xl-12 col-lg-12">
                <div id="accesos">
                    <h1 class="d-flex justify-content-center text-primary">Acceso de usuarios en la web</h1>
                    <div id="chart_div"></div>
                    <div id="control_div"></div>
                    <p><span id='dbgchart'></span></p>
                </div>
        </div><br><br>

        <div class="container-fluid">

            <div class="col-xs-12 col-md-12 col-xl-12 col-lg-12 ">
                <h1 class="d-flex justify-content-center text-primary">Cantidad de socios por cada sociedad</h1>
                    <div id="socios"></div><br>
                <h1 class="d-flex justify-content-center text-primary">Productos mas utilizados por las sociedades</h1>
                    <div id="productos"></div>
            </div>

        </div>

@endsection

