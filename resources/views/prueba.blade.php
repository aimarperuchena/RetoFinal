<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/dashboard/">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
    <link href="{{secure_asset('/pruebaJs/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{secure_asset('pruebaJs/blog-post.css')}}" rel="stylesheet">

</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-primary  sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">

                        <li class="nav-item">
                            <a class="nav-link texto_link active">
                                 <i class="fas fa-fw fa-tachometer-alt"></i>
                                <span data-feather="home"></span> Panel De Control <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link texto_link" href="#">
                            <i class="fas fa-info-circle"></i>
                                <span data-feather="file"></span> Información Sociedad
                            </a>
                        </li>
                        <li class="nav-item">
                       
                            <a class="nav-link texto_link active" data-toggle="collapse" href="#collapseSocios" role="button" aria-expanded="false" aria-controls="collapseSocios"> <i class="fas fa-users"></i> Socios</a>
                            <div class="collapse" id="collapseSocios">
                                <div class="card card-body">

                                    <a class="nav-link " href="#">
                                          <i class="fas fa-users"></i>
                                        <span data-feather="file"></span> Listar Socios
                                    </a>

                                    <a class="nav-link " href="#">
                                        <span data-feather="file"></span> Nuevas Peticiones
                                    </a>

                                </div>
                            </div>
                        </li>
                        <li class="nav-item">

<a class="nav-link texto_link active" data-toggle="collapse" href="#collapseproducto" role="button" aria-expanded="false" aria-controls="collapseproducto">   <i class="fas fa-warehouse"></i> Productos</a>
<div class="collapse" id="collapseproducto">
    <div class="card card-body">

        <a class="nav-link " href="#">
            <span data-feather="file"></span> Listar Productos
        </a>

        <a class="nav-link " href="#">
            <span data-feather="file"></span> Añadir Productos
        </a>

    </div>
</div>
</li>
                    </ul>

                   
                   
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <!-- Content Row -->
                <br>
                <br>
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Panel de Control</h1>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-md-6 mb-4">
                        <a href="/admin/reservaIndex">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="title-xs font-weight-bold text-primary text-uppercase mb-1">Reservas</div>

                                        </div>
                                        <div class="col-auto">

                                            <i class="fas fa-book fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-3 col-md-6 mb-4">
                        <a href="/admin/productoIndex">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="title-xs font-weight-bold text-primary text-uppercase mb-1">Productos</div>

                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-warehouse fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-3 col-md-6 mb-4">
                        <a href="/admin/incidenciaIndex">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="title-xs font-weight-bold text-primary text-uppercase mb-1">Incidencias</div>

                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-exclamation-triangle fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-3 col-md-6 mb-4">
                        <a href="/admin/mesaIndex">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="title-xs font-weight-bold text-primary text-uppercase mb-1">Mesas</div>

                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-park fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </a>
                </div>

                <h2>Section title</h2>
                
            </main>
        </div>
    </div>
    <script src="{{ url('/pruebaJs/jquery-3.4.1.min.js')}}"></script>
    <script src="{{ url('/pruebaJs/popper.min.js')}}"></script>
    <script src="{{ url('/pruebaJs/bootstrap.min.js')}}"></script>
</body>

</html>