<script src="../assets/js/scripts.horario.js"></script>
<div class="container espaciado" id="main">

    <?php if($_SESSION['SRol']!=3){ ?>

      <a id="crearhorario" class="btn-rounded btn float-right" onclick="GestionarHorario();">Crear Horario</a>
      
    <?php }?>    

    <h3 class="noti-tittle">Horario <?php echo $_SESSION['grupoficha']; ?></h3>

    <div id="tview">
      <?php include_once("horarioSelect.php");?> 
    </div>

    <?php if($_SESSION['SRol']!=3){ ?>

      <div class="formsHorario">

        <?php include_once("horarioInsert.php");?> 

      </div>   

    <?php } ?> 
</div>



