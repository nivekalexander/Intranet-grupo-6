 <!--funcionalidad-->
  <script src="../assets/js/scripts.foro.js"></script>

<div class="container" id="contenedorForo">
  
    <div class="container espaciado" id="main">
      <a class="btn-rounded btn float-right" data-toggle="modal" data-target="#foroModal">Crear Foro</a>
      <h3 class="noti-tittle">Foros <?php echo $fichapuntero ?></h3>
    </div>

    <div class="formsForo">
      <?php include_once("foroInsert.php");?> 
    </div>

    <div id="tview">
      <?php include_once("foroSelect.php");?> 
    </div>
  
</div>