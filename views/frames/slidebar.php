<?php

error_reporting(E_ALL ^ E_NOTICE);







if( $_SESSION['SRol']==1 || $_SESSION['SRol']==2){

  if($_SESSION['slidebar']!=0){ ?>
    <!-- Page Wrapper -->
    <div id="wrapper">



      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Nav Item - Grupos -->
        <li class="nav-item active">
          <a class="nav-link selection"  href="./main.php?ctrl=grupos&slidebar=0">
            <img src="../assets/img/img-slidebar/grupos.svg" class="slidebar-img" alt="new">
            <span>Grupos</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Noticias -->
        <li class="nav-item active">
          <a class="nav-link selection" href="main.php?ctrl=noticia">
            <img src="../assets/img/img-slidebar/periodico.svg" class="slidebar-img" alt="new">
            <span>Noticias</span></a>
        </li>
        
        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Anuncios -->
        <li class="nav-item active">
          <a class="nav-link selection" href="./main.php?ctrl=anuncio">

            <img src="../assets/img/img-slidebar/anuncios.svg" class="slidebar-img" alt="new">
            <span>Anuncios</span></a>

        </li>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Material de Apoyo -->
        <li class="nav-item active">
          <a class="nav-link selection"  href="./main.php?ctrl=materialapoyo">
            <img src="../assets/img/img-slidebar/materialapoyo.svg" class="slidebar-img" alt="new">
            <span>Material de apoyo</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Foro -->
        <li class="nav-item active">
          <a class="nav-link selection"  href="./main.php?ctrl=foro">
            <img src="../assets/img/img-slidebar/foro.svg" class="slidebar-img" alt="new">
            <span>Foro</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Horario -->
        <li class="nav-item active">
          <a class="nav-link selection"  href="./main.php?ctrl=horario">
            <img src="../assets/img/img-slidebar/horario.svg" class="slidebar-img" alt="new">
            <span>Horario</span></a>
        </li>
        
        <?php if($_SESSION['SRol']==1){?>

          <div class="sidebar-heading">
              Panel De Control
          </div>
          <!-- Nav Item - Usuarios -->
          <li class="nav-item active">
            <a class="nav-link selection"  href="./main.php?ctrl=usuario">
              <img src="../assets/img/img-slidebar/usuarios.svg" class="slidebar-img" alt="new">
              <span>Usuarios</span></a>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider my-0">

          <!-- Nav Item - Ficha -->
          <li class="nav-item active">
            <a class="nav-link selection"  href="./main.php?ctrl=ficha">
              <img src="../assets/img/img-slidebar/ficha.svg" class="slidebar-img" alt="new">
              <span>Ficha</span></a>
          </li>


          <!-- Divider -->
          <hr class="sidebar-divider my-0">

          <!-- Nav Item - Programa de formación -->
          <li class="nav-item active">
            <a class="nav-link selection"  href="./main.php?ctrl=programaformacion">
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
                <a class="collapse-item"  href="./main.php?ctrl=tipoidentificacion">Tipo identificación</a>
                <a class="collapse-item"  href="./main.php?ctrl=rol">Rol</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">General:</h6>
                <a class="collapse-item" href="./main.php?ctrl=tipoprograma">Tipo de Programa</a>
                <a class="collapse-item" href="./main.php?ctrl=tipooferta">Tipo Oferta</a>
                <a class="collapse-item" href="./main.php?ctrl=tipojornada">Tipo Jornada</a>
                <a class="collapse-item" href="./main.php?ctrl=fases">Fases</a>
                <a class="collapse-item" href="./main.php?ctrl=modalidad">Modalidad</a>
                <a class="collapse-item" href="./main.php?ctrl=estado">Estado</a>
              </div>
            </div>
          </li>

        <?php }?>


        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

      </ul>

    <!-- End of Sidebar -->


  <?php } } 

  //if de roles 1 y 2
  
  if($_SESSION['slidebar']==0){?>

    <?php if($_SESSION['SRol']==3 || $_SESSION['SRol']==2){?>

      <!-- Page Wrapper -->
      <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

          <?php if($_SESSION['SRol']==2){?>

            <!-- Nav Item - Grupos -->
            <li class="nav-item active">
              <a class="nav-link selection"  href="./main.php?ctrl=grupos&slidebar=0">
                <img src="../assets/img/img-slidebar/grupos.svg" class="slidebar-img" alt="new">
                <span>Grupos</span></a>
            </li>

          <?php }else{?>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            
              <!-- Sidebar Toggler (Sidebar) -->

              <!-- Nav Item - Noticias -->
            <li class="nav-item active">
              <a class="nav-link selection" href="main.php?ctrl=noticia">
                <img src="../assets/img/img-slidebar/periodico.svg" class="slidebar-img" alt="new">
                <span>Noticias</span>
              </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Anuncios -->
            <li class="nav-item active">
              <a class="nav-link selection" href="./main.php?ctrl=anuncio">

              <img src="../assets/img/img-slidebar/anuncios.svg" class="slidebar-img" alt="new">
              <span>Anuncios</span></a>

            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Material de Apoyo -->
            <li class="nav-item active">
              <a class="nav-link selection"  href="./main.php?ctrl=materialapoyo">
              <img src="../assets/img/img-slidebar/materialapoyo.svg" class="slidebar-img" alt="new">
              <span>Material de apoyo</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Foro -->
            <li class="nav-item active">
              <a class="nav-link selection"  href="./main.php?ctrl=foro">
              <img src="../assets/img/img-slidebar/foro.svg" class="slidebar-img" alt="new">
              <span>Foro</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Horario -->
            <li class="nav-item active">
              <a class="nav-link selection"  href="./main.php?ctrl=horario">
                <img src="../assets/img/img-slidebar/horario.svg" class="slidebar-img" alt="new">
                <span>Horario</span>
              </a>
            </li>
          <?php }?>
          
        </ul>
          

    <?php }else{?>

      <!-- Page Wrapper -->
      <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

          <!-- Nav Item - Grupos -->
          <li class="nav-item active">
            <a class="nav-link selection"  href="./main.php?ctrl=grupos">
              <img src="../assets/img/img-slidebar/grupos.svg" class="slidebar-img" alt="new">
              <span>Grupos</span></a>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider my-0">
          
            <!-- Sidebar Toggler (Sidebar) -->
            <!-- Nav Item - Noticias -->
          <li class="nav-item active">
            <a class="nav-link selection" href="main.php?ctrl=noticia">
              <img src="../assets/img/img-slidebar/periodico.svg" class="slidebar-img" alt="new">
              <span>Noticias</span></a>
          </li>

        
          
          <div class="sidebar-heading">
              Panel De Control
          </div>

        

          <!-- Nav Item - Usuarios -->
          <li class="nav-item active">
            <a class="nav-link selection"  href="./main.php?ctrl=usuario">
              <img src="../assets/img/img-slidebar/usuarios.svg" class="slidebar-img" alt="new">
              <span>Usuarios</span></a>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider my-0">

          <!-- Nav Item - Ficha -->
          <li class="nav-item active">
            <a class="nav-link selection"  href="./main.php?ctrl=ficha">
              <img src="../assets/img/img-slidebar/ficha.svg" class="slidebar-img" alt="new">
              <span>Ficha</span></a>
          </li>


          <!-- Divider -->
          <hr class="sidebar-divider my-0">

          <!-- Nav Item - Programa de formación -->
          <li class="nav-item active">
            <a class="nav-link selection"  href="./main.php?ctrl=programaformacion">
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
                <a class="collapse-item"  href="./main.php?ctrl=tipoidentificacion">Tipo identificación</a>
                <a class="collapse-item"  href="./main.php?ctrl=rol">Rol</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">General:</h6>
                <a class="collapse-item" href="./main.php?ctrl=tipoprograma">Tipo de Programa</a>
                <a class="collapse-item" href="./main.php?ctrl=tipooferta">Tipo Oferta</a>
                <a class="collapse-item" href="./main.php?ctrl=tipojornada">Tipo Jornada</a>
                <a class="collapse-item" href="./main.php?ctrl=fases">Fases</a>
                <a class="collapse-item" href="./main.php?ctrl=modalidad">Modalidad</a>
                <a class="collapse-item" href="./main.php?ctrl=estado">Estado</a>
              </div>
            </div>
          </li>

        </ul>

    <?php }?>
    

  <?php }?>