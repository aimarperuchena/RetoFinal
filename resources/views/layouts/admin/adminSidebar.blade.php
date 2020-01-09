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
    <a class="nav-link" href="/admin">
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
    <a class="nav-link collapsed" href="/admin/sociedadEdit" aria-controls="collapseTwo">
      <i class="fas fa-info-circle"></i>
      <span>Información Sociedad</span>
    </a>
  </li>
  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed"  data-toggle="collapse" data-target="#collapseSocios" aria-expanded="true" aria-controls="collapseSocios">
      <i class="fas fa-users"></i>
      <span>Socios</span>
    </a>
    <div id="collapseSocios" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Acciones Socios:</h6>
        <a class="collapse-item" href="/admin/userIndex">Listar Socios</a>
        <a class="collapse-item" href="cards.html">Nuevas Peticiones</a>
      </div>
    </div>
  </li>
  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed"  data-toggle="collapse" data-target="#collapseProductos" aria-expanded="true" aria-controls="collapseProductos">
      <i class="fas fa-warehouse"></i>
      <span>Productos</span>
    </a>
    <div id="collapseProductos" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Acciones Productos:</h6>
        <a class="collapse-item" href="/admin/productoIndex">Listar Productos</a>
        <a class="collapse-item" href="/admin/productCreate">Añadir Productos</a>
      </div>
    </div>
  </li>
</ul>
<!-- End of Sidebar -->
