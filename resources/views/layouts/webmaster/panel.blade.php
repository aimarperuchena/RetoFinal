@extends('layouts.webmaster.WMView')

@section('webmasterContent')
<br><br>
<div class="row">
    <div class="col-xl-6 col-lg-6 col-md-6 mb-4">
        <a href="/perfil">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="title-xs font-weight-bold text-primary text-uppercase mb-1"><h1>Informacion</h1></div>
                        </div>
                        <div class="col mr-2">
                            <div class="title-xs font-weight-bold text-primary text-uppercase mb-1"><h1>{{$sociedades}}</h1></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-book fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-xl-6 col-lg-6 col-md-6 mb-4">
        <a href="/webmaster/sociIndex">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="title-xs font-weight-bold text-primary text-uppercase mb-1"><h1>Sociedades</h1></div>
                        </div>
                        <div class="col mr-2">
                            <div class="title-xs font-weight-bold text-primary text-uppercase mb-1"><h1>{{$sociedades}}</h1></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-warehouse fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-xl-6 col-lg-6 col-md-6 mb-4">
        <a href="/webmaster/socioIndex">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="title-xs font-weight-bold text-primary text-uppercase mb-1"><h1>Socios</h1></div>
                        </div>
                        <div class="col mr-2">
                            <div class="title-xs font-weight-bold text-primary text-uppercase mb-1"><h1>{{$socios}}</h1></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-xl-6 col-lg-6 col-md-6 mb-4">
        <a href="/webmaster/productoIndex">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="title-xs font-weight-bold text-primary text-uppercase mb-1"><h1>Productos</h1></div>
                        </div>
                        <div class="col mr-2">
                            <div class="title-xs font-weight-bold text-primary text-uppercase mb-1"><h1>{{$productos}}</h1></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-cocktail fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    </a>
</div>

@endsection

