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
    <link href="{{url('/pruebaJs/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('pruebaJs/blog-post.css')}}" rel="stylesheet">

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
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Header</th>
                                <th>Header</th>
                                <th>Header</th>
                                <th>Header</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1,001</td>
                                <td>Lorem</td>
                                <td>ipsum</td>
                                <td>dolor</td>
                                <td>sit</td>
                            </tr>
                            <tr>
                                <td>1,002</td>
                                <td>amet</td>
                                <td>consectetur</td>
                                <td>adipiscing</td>
                                <td>elit</td>
                            </tr>
                            <tr>
                                <td>1,003</td>
                                <td>Integer</td>
                                <td>nec</td>
                                <td>odio</td>
                                <td>Praesent</td>
                            </tr>
                            <tr>
                                <td>1,003</td>
                                <td>libero</td>
                                <td>Sed</td>
                                <td>cursus</td>
                                <td>ante</td>
                            </tr>
                            <tr>
                                <td>1,004</td>
                                <td>dapibus</td>
                                <td>diam</td>
                                <td>Sed</td>
                                <td>nisi</td>
                            </tr>
                            <tr>
                                <td>1,005</td>
                                <td>Nulla</td>
                                <td>quis</td>
                                <td>sem</td>
                                <td>at</td>
                            </tr>
                            <tr>
                                <td>1,006</td>
                                <td>nibh</td>
                                <td>elementum</td>
                                <td>imperdiet</td>
                                <td>Duis</td>
                            </tr>
                            <tr>
                                <td>1,007</td>
                                <td>sagittis</td>
                                <td>ipsum</td>
                                <td>Praesent</td>
                                <td>mauris</td>
                            </tr>
                            <tr>
                                <td>1,008</td>
                                <td>Fusce</td>
                                <td>nec</td>
                                <td>tellus</td>
                                <td>sed</td>
                            </tr>
                            <tr>
                                <td>1,009</td>
                                <td>augue</td>
                                <td>semper</td>
                                <td>porta</td>
                                <td>Mauris</td>
                            </tr>
                            <tr>
                                <td>1,010</td>
                                <td>massa</td>
                                <td>Vestibulum</td>
                                <td>lacinia</td>
                                <td>arcu</td>
                            </tr>
                            <tr>
                                <td>1,011</td>
                                <td>eget</td>
                                <td>nulla</td>
                                <td>Class</td>
                                <td>aptent</td>
                            </tr>
                            <tr>
                                <td>1,012</td>
                                <td>taciti</td>
                                <td>sociosqu</td>
                                <td>ad</td>
                                <td>litora</td>
                            </tr>
                            <tr>
                                <td>1,013</td>
                                <td>torquent</td>
                                <td>per</td>
                                <td>conubia</td>
                                <td>nostra</td>
                            </tr>
                            <tr>
                                <td>1,014</td>
                                <td>per</td>
                                <td>inceptos</td>
                                <td>himenaeos</td>
                                <td>Curabitur</td>
                            </tr>
                            <tr>
                                <td>1,015</td>
                                <td>sodales</td>
                                <td>ligula</td>
                                <td>in</td>
                                <td>libero</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
    <script src="{{ url('/pruebaJs/jquery-3.4.1.min.js')}}"></script>
    <script src="{{ url('/pruebaJs/popper.min.js')}}"></script>
    <script src="{{ url('/pruebaJs/bootstrap.min.js')}}"></script>
</body>

</html>