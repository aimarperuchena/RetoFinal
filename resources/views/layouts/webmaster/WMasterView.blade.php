<div id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper" class="d-flex">

    <!-- Sidebar -->
    <ul class="bg-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Panel de Control</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Sociedad
      </div>




      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" aria-controls="collapseTwo">
          <i class="fas fa-info-circle"></i>
          <span>Información Admin</span>
        </a>

      </li>


      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSociedades" aria-expanded="true" aria-controls="collapseSociedades">
          <i class="fas fa-users"></i>
          <span>Sociedades</span>
        </a>
        <div id="collapseSociedades" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Acciones Sociedades:</h6>
            <a class="collapse-item" href="/admin/userIndex">Listar Sociedades</a>
            <a class="collapse-item" href="/admin/userIndex">Editar Sociedades</a>
            <a class="collapse-item" href="cards.html">Eliminar Sociedades</a>
          </div>
        </div>
      </li>

       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSocios" aria-expanded="true" aria-controls="collapseSocios">
          <i class="fas fa-users"></i>
          <span>Socios</span>
        </a>
        <div id="collapseSocios" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Acciones Socios:</h6>
            <a class="collapse-item" href="/admin/userIndex">Listar Socios</a>
            <a class="collapse-item" href="cards.html">Editar Socios</a>
            <a class="collapse-item" href="cards.html">Eliminar Socios</a>

          </div>
        </div>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProductos" aria-expanded="true" aria-controls="collapseProductos">
          <i class="fas fa-warehouse"></i>
          <span>Productos</span>
        </a>
        <div id="collapseProductos" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Acciones Productos:</h6>
            <a class="collapse-item" href="/admin/productoIndex">Listar Productos</a>
            <a class="collapse-item" href="/admin/productCreate">Añadir Productos</a>
            <a class="collapse-item" href="/admin/productCreate">Editar Productos</a>
            <a class="collapse-item" href="cards.html">Eliminar Productos</a>
          </div>
        </div>
      </li>




    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">










        <br><br>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Panel de Control</h1>
          </div>

          <!-- Content Row -->
          <div class="row">


            <div class="col-xl-3 col-md-6 mb-4">
              <a href="/webmaster/reservaIndex">
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
              <a href="/webmaster/productoIndex">
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
              <a href="/webmaster/incidenciaIndex">
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
              <a href="/webmaster/mesaIndex">
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
          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
         
            </div>


            

            