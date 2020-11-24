<link href="assets/scss/noticias.scss" rel="stylesheet/sass" type="text/css">

<div class="container espaciado">
      <a class="btn-rounded btn float-right" data-toggle="modal" data-target="#noticiaModal">Crear noticia</a>
    <h3 class="noti-tittle">Noticias</h3>

    <div class="formsNoti">
      <?php include_once("noticiaInsert.php");?> 
    </div>

    <div id="tview">
      <?php include_once("noticiaSelect.php");?> 
    </div>
</div>



