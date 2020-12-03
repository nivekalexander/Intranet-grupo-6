
<script src="../assets/js/scripts.noticia.js"></script>

<div class="container espaciado" id="main">

    <?php if($_SESSION['SRol']==1){ ?>

      <a class="btn-rounded btn float-right" data-toggle="modal" data-target="#noticiaModal">Crear noticia</a>
    
    <?php } ?>

    <h3 class="noti-tittle">Noticias </h3>
    
    <?php if($_SESSION['SRol']==1){ ?>

    <div class="formsNoti">
      <?php include_once("noticiaInsert.php");?> 
    </div>

    <?php } ?> 

    <div id="tview">
      <?php include_once("noticiaSelect.php");?> 
    </div>

</div>



