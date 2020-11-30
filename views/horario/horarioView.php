<script src="../assets/js/scripts.horario.js"></script>
<div class="container espaciado" id="main">
      <a id="crearhorario" class="btn-rounded btn float-right" onclick="GestionarHorario();">Crear Horario</a>
    <h3 class="noti-tittle">Horario <?php echo $fichacodigo?></h3>

    <div id="tview">
      <?php include_once("horarioSelect.php");?> 
    </div>

    <div class="formsHorario">
      <?php include_once("horarioInsert.php");?> 
    </div>    
</div>



