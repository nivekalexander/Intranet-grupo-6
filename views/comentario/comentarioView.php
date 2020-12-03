 <!--funcionalidad-->  

    <div class="container espaciado" id="main">
      <a class="btn-rounded btn float-right" href="./main.php?ctrl=foro">Volver</a>
      <h3 class="noti-tittle">Foro: <?php echo $_REQUEST['titulo']; ?>
    </div>

    <div class="d-flex justify-content-center" id="comforo">
        <div class="card bg-light mb-5 w-100 diseño-tarjeta">
            <div class="card-header " >
            <div class="float-left mr-5" >
                <a name="imagenPost"><img src="../assets/img/img-slidebar/foro.svg" width="40" height="40"></a>
            </div>                
            <div class="float-left">
                Fecha inicio: <?php echo $_REQUEST['fchini'];?><br>
                Fecha fin:    <?php echo $_REQUEST['fchfin'];?>
            </div>
            </div>

            <input type="text" value="" hidden>
        
            <div class="card-body">            
            <p class="card-text"><?php echo $_REQUEST['descrp'];?></p>
            <div class="float-right">                
                <button type="button" id="collapseCom" class="btn-rounded btn" onclick="CleanCom();" data-toggle="collapse" data-target="#comentarioInsert" aria-expanded="false" aria-controls="collapseExample"> Comentar </button>
            </div>
            </div>
            <div class="collapse" id="comentarioInsert">
              <div class="card card-body bg-light border border-secondary">
                
                <div class="formsComentario">
                  <?php include_once("comentarioInsert.php");?> 
                </div>

              </div>
            </div>            
        </div>
    </div>

    <div id="tview">
      <?php include_once("comentarioSelect.php");?> 
    </div>
  