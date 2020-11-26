 <!--funcionalidad-->
  <script src="../assets/js/scripts.foro.js"></script>
	<script src="../assets/js/scripts.comentario.js"></script>
  <script src="../assets/js/scripts.respuesta.js"></script>

<div class="container">
  <div class="container espaciado" id="main">
      <a class="btn-rounded btn float-right" data-toggle="modal" data-target="#foroModal">Crear Foro</a>
    <h3 class="noti-tittle">Foros</h3>

    <div class="formsForo">
      <?php include_once("foroInsert.php");?> 
    </div>

    <div id="tview">
      <?php include_once("foroSelect.php");?> 
    </div>
  </div>
</div>