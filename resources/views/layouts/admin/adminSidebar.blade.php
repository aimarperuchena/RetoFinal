<nav class="col-md-2 d-none d-md-block bg-primary  sidebar">
                <div class="sidebar-sticky">
                    <br><br><br><br>

                    <ul class="nav flex-column">
<h3 class="text-dark">{{$sociedad->nombre}}</h3>
                        <li class="nav-item">
                            <a class="nav-link text-dark active" href="/admin">
                                 <i class="fas fa-fw fa-tachometer-alt"></i>
                                <span data-feather="home"></span> Panel De Control <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link texto_link" href="/admin/sociedadEdit">
                            <i class="fas fa-info-circle"></i>
                                 Información Sociedad
                            </a>
                        </li>
                        <li class="nav-item">
                       
                            <a class="nav-link texto_link active" data-toggle="collapse" href="#collapseSocios"  role="button" aria-expanded="false" aria-controls="collapseSocios"> <i class="fas fa-users"></i> Socios</a>
                            <div class="collapse" id="collapseSocios">
                                <div class="card card-body">

                                    <a class="nav-link " href="/admin/userIndex">
                                        
                                          <i class="fas fa-eye"></i> Listar Socios
                                    </a>

                                    <a class="nav-link " href="/admin/peticionesSociedad">
                                    <i class="fas fa-plus-circle"></i> Nuevas Peticiones
                                    </a>

                                </div>
                            </div>
                        </li>
                        <li class="nav-item">

<a class="nav-link texto_link active" data-toggle="collapse" href="#collapseproducto" role="button" aria-expanded="false" aria-controls="collapseproducto">   <i class="fas fa-warehouse"></i> Productos</a>
<div class="collapse" id="collapseproducto">
    <div class="card card-body">

        <a class="nav-link " href="/admin/productoIndex">
        <i class="fas fa-eye"></i>  Listar Productos
        </a>

        <a class="nav-link " href="/admin/productCreate/">
        <i class="fas fa-plus-circle"></i> Añadir Productos
        </a>

    </div>
</div>
</li>
                    </ul>

                   
                   
                </div>
            </nav>