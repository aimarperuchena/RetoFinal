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
          <span>Información Sociedad</span>
        </a>

      </li>


      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSocios" aria-expanded="true" aria-controls="collapseSocios">
          <i class="fas fa-users"></i>
          <span>Socios</span>
        </a>
        <div id="collapseSocios" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Acciones Socios:</h6>
            <a class="collapse-item" href="buttons.html">Listar Socios</a>
            <a class="collapse-item" href="cards.html">Nuevas Peticiones</a>
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
            <a class="collapse-item" href="buttons.html">Listar Productos</a>
            <a class="collapse-item" href="cards.html">Añadir Productos</a>
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
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
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
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
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
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
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
          </div>
          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <h3>Incidencias</h3>
              <a href="/admin/createIncidencia">Crear Incidencia</a>
              <table>
                <tr>
                  <th>Id</th>
                  <th>Descripcion</th>
                  <th>Estado</th>
                  <th>Fecha</th>
                  <th>Editar</th>
                  <th>Eliminar</th>

                </tr>
                @foreach($sociedad->incidencias as $incidencia)
                <tr>
                  <td>{{$incidencia->id}}</td>
                  <td>{{$incidencia->descripcion}}</td>
                  <td>{{$incidencia->estado}}</td>
                  <td>{{$incidencia->fecha}}</td>
                  <td><a href="/admin/incidenciaEdit/{{$incidencia->id}}"><i class="fa fa-pencil" style="color:black"></i></a></td>
                  <td><a href="/admin/incidenciaDelete/{{$incidencia->id}}"><i class="fa fa-trash-o" style="color:black"></i></a></td>

                </tr>
                @endforeach
              </table>
            </div>


            <!-- End of Page Wrapper -->
            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
              <i class="fas fa-angle-up"></i>
            </a>

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                  <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                  </div>
                </div>
              </div>
            </div>
          </div>