<script src="../assets/js/scripts.noticia.js"></script>
<div class="container espaciado" id="main">
      <a class="btn-rounded btn float-right" data-toggle="modal" data-target="#noticiaModal">Crear noticia</a>
    <h3 class="noti-tittle">Noticias</h3>

    <div class="formsNoti">
      <?php include_once("noticiaInsert.php");?> 
    </div>

    <div id="tview">
      <?php include_once("noticiaSelect.php");?> 
    </div>
</div>



