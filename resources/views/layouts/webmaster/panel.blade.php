@extends('layouts.webmaster.WMView')

@section('webmasterContent')

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

@endsection

