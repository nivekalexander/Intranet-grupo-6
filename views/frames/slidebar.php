
<!-- Page Wrapper -->
<div id="wrapper">

  <input id="fichapuntero" type="text" hidden>

  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <?php

    error_reporting(E_ALL ^ E_NOTICE);


    if(isset($_SESSION['fichapuntero'])){ ?>
    

    <!-- Nav Item - Grupos -->
    <li class="nav-item active" >
      <a class="nav-link selection"  onclick="menu('grupos');" >
        <img src="../assets/img/img-slidebar/grupos.svg" class="slidebar-img" alt="new">
        <span>Grupos</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Noticias -->
    <li class="nav-item active">
      <a class="nav-link selection"  onclick="menu('noticia');">
        <img src="../assets/img/img-slidebar/periodico.svg" class="slidebar-img" alt="new">
        <span>Noticias</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Anuncios -->
    <li class="nav-item active">
      <a class="nav-link selection" onclick="menu('anuncio');">

        <img src="../assets/img/img-slidebar/anuncios.svg" class="slidebar-img" alt="new">
        <span>Anuncios</span></a>

    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Material de Apoyo -->
    <li class="nav-item active">
      <a class="nav-link selection"  onclick="menu('materialapoyo');">
        <img src="../assets/img/img-slidebar/materialapoyo.svg" class="slidebar-img" alt="new">
        <span>Material de apoyo</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Foro -->
    <li class="nav-item active">
      <a class="nav-link selection" onclick="menu('foro');">
        <img src="../assets/img/img-slidebar/foro.svg" class="slidebar-img" alt="new">
        <span>Foro</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Horario -->
    <li class="nav-item active">
      <a class="nav-link selection"  onclick="menu('horario');">
        <img src="../assets/img/img-slidebar/horario.svg" class="slidebar-img" alt="new">
        <span>Horario</span></a>
    </li>
    
    <div class="sidebar-heading">
        Panel De Control
    </div>
    <!-- Nav Item - Usuarios -->
    <li class="nav-item active">
      <a class="nav-link selection"  onclick="menu('usuario');">
        <img src="../assets/img/img-slidebar/usuarios.svg" class="slidebar-img" alt="new">
        <span>Usuarios</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Ficha -->
    <li class="nav-item active">
      <a class="nav-link selection"  onclick="menu('ficha');">
        <img src="../assets/img/img-slidebar/ficha.svg" class="slidebar-img" alt="new">
        <span>Ficha</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Programa de formación -->
    <li class="nav-item active">
      <a class="nav-link selection"  onclick="menu('programaformacion');">
        <img src="../assets/img/img-slidebar/programaformacion.svg" class="slidebar-img" alt="new">
        <span id="programa" class="programa2">Programa de formación</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">


      <!-- Heading -->

      <div class="sidebar-heading">
        Utilidades
      </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Base de datos</span>
      </a>
      <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Usuarios:</h6>
          <a class="collapse-item"  onclick="menu('tipoidentificacion');">Tipo identificación</a>
          <a class="collapse-item" onclick="menu('rol');">Rol</a>
          <div class="collapse-divider"></div>
          <h6 class="collapse-header">General:</h6>
          <a class="collapse-item" onclick="menu('tipoidentificacion');">Tipo de Programa</a>
          <a class="collapse-item" onclick="menu('tipooferta');">Tipo Oferta</a>
          <a class="collapse-item" onclick="menu('tipojornada');">Tipo Jornada</a>
          <a class="collapse-item" onclick="menu('fases');">Fases</a>
          <a class="collapse-item" onclick="menu('modalidad');">Modalidad</a>
          <a class="collapse-item" onclick="menu('estado');">Estado</a>
        </div>
      </div>
    </li>



    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>

 

<?php }else{?>


    <!-- Nav Item - Grupos -->
    <li class="nav-item active">
      <a class="nav-link selection"  onclick="menu('grupos');">
        <img src="../assets/img/img-slidebar/grupos.svg" class="slidebar-img" alt="new">
        <span>Grupos</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    
      <!-- Sidebar Toggler (Sidebar) -->
       <!-- Nav Item - Noticias -->
    <li class="nav-item active">
      <a class="nav-link selection" onclick="menu('noticia');">
        <img src="../assets/img/img-slidebar/periodico.svg" class="slidebar-img" alt="new">
        <span>Noticias</span></a>
    </li>

   
    
    <div class="sidebar-heading">
        Panel De Control
    </div>

   

    <!-- Nav Item - Usuarios -->
    <li class="nav-item active">
      <a class="nav-link selection"  onclick="menu('usuario');">
        <img src="../assets/img/img-slidebar/usuarios.svg" class="slidebar-img" alt="new">
        <span>Usuarios</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Ficha -->
    <li class="nav-item active">
      <a class="nav-link selection"  onclick="menu('ficha');">
        <img src="../assets/img/img-slidebar/ficha.svg" class="slidebar-img" alt="new">
        <span>Ficha</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Programa de formación -->
    <li class="nav-item active">
      <a class="nav-link selection"  onclick="menu('programaformacion');">
        <img src="../assets/img/img-slidebar/programaformacion.svg" class="slidebar-img" alt="new">
        <span id="programa" class="programa2">Programa de formación</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


    <!-- Heading -->

   <div class="sidebar-heading">
        Utilidades
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Base de datos</span>
      </a>
      <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Usuarios:</h6>
          <a class="collapse-item"  onclick="menu('tipoidentificacion');">Tipo identificación</a>
          <a class="collapse-item"  onclick="menu('rol');">Rol</a>
          <div class="collapse-divider"></div>
          <h6 class="collapse-header">General:</h6>
          <a class="collapse-item" onclick="menu('tipoprograma');">Tipo de Programa</a>
          <a class="collapse-item" onclick="menu('tipooferta');">Tipo Oferta</a>
          <a class="collapse-item" onclick="menu('tipoprograma');">Tipo Jornada</a>
          <a class="collapse-item" onclick="menu('fases');">Fases</a>
          <a class="collapse-item" onclick="menu('modalidad');">Modalidad</a>
          <a class="collapse-item" onclick="menu('estado');">Estado</a>
        </div>
      </div>
    </li>

  </ul>

<?php }?>

 <!-- End of Sidebar -->

 <div class="container espaciado" id="main">