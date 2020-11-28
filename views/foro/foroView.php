 <!--funcionalidad-->
  <script src="../assets/js/scripts.foro.js"></script>

<<<<<<< HEAD
    <div class="container espaciado">
    
    <a class="btn-rounded btn float-right" data-toggle="modal" data-target="#foroModal">Crear Foro</a>
    <h3 class="noti-tittle">Foros</h3>
    
=======
<div class="container">
    <div class="container espaciado" id="main">
      <a class="btn-rounded btn float-right" data-toggle="modal" data-target="#foroModal">Crear Foro</a>
      <h3 class="noti-tittle">Foros <?php echo $fichapuntero ?></h3>
>>>>>>> 874c1c83499cecf6083cd4dbb4fd1d70e39b11e1
    </div>

    <div class="formsForo">
      <?php include_once("foroInsert.php");?> 
    </div>

    <div id="tview">
      <?php include_once("foroSelect.php");?> 
    </div>
  
