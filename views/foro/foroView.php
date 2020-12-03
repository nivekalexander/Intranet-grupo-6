<script src="../assets/js/scripts.comentario.js"></script>
<script src="../assets/js/scripts.foro.js"></script>
 <!--funcionalidad-->
<div class="container" id="contenedorForo">    
  
    <div class="container espaciado" id="main">

    <?php if($_SESSION['SRol']!=3){ ?>

      <a class="btn-rounded btn float-right" data-toggle="modal" data-target="#foroModal">Crear Foro</a>

    <?php } ?>

      <h3 class="noti-tittle">Foros <?php echo $_SESSION['grupoficha']; ?></h3>
    </div>

    

      <div class="formsForo">
        <?php include_once("foroInsert.php");?> 
      </div>

    

    <div id="tview">
      <?php include_once("foroSelect.php");?> 
    </div>
  
</div>