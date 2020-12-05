
  <table>
  <!--cuerpo de la tabla-->
  <tbody>
    
    <?php $foros = $this->foro->Select($_SESSION['grupoficha']);
    if($foros){
    foreach ($foros as $filas): ?>
      <?php $grupal="'".$filas->for_id."','".$filas->for_titulo."','".$filas->for_fchfin."','".$filas->for_fchini."','".preg_replace("/[\r\n|\n|\r]+/", " ", $filas->for_descrp)."','".$filas->for_usunumdnt."'"; ?>

        <div class="d-flex justify-content-center">
          <div class="card bg-light mb-5 w-100 diseño-tarjeta">
              <div class="card-header " >
                <div class="float-left mr-5" >
                  <a name="imagenPost"><img src="../assets/img/img-slidebar/foro.svg" width="40" height="40"></a>
                </div>                
                <div class="float-left">
                  Publicador: <br>
                  <?php echo $filas->usu_nombre." ".$filas->usu_aplldo;?>
                </div>
                <div class="float-right">
                  Fecha inicio: <?php echo $filas->for_fchini;?><br>
                  Fecha fin:    <?php echo $filas->for_fchfin;?>
                </div>
              </div>
            
              <div class="card-body">
                <h5 class="card-title">Titulo: <?php echo $filas->for_titulo; ?></h5>
                <div id="descrpFor<?php echo $filas->for_id; ?>" class="card-text"><?php echo nl2br($filas->for_descrp);?></div>                
                <div class="float-right">
                  <button type="button" class="btn-rounded btn" onclick="ParticiparForo(<?php echo $grupal; ?>);"> Participar </button>

                  <?php if($_SESSION['SRol']!=3){ 
                    
                         if($_SESSION['SIdu'] == $filas->for_usunumdnt || $_SESSION['SRol']==1){ 
                    ?>

                      <button class="btn-rounded btn" data-toggle="modal" onclick="EditarForo(<?php echo $grupal; ?>);">Editar</button>
                      <button type="button" class="btn-rounded btn" onclick="BorrarForo('<?php echo $filas->for_id;?>');"> Eliminar </button>
                
                  <?php }

                    } ?>
                
                </div>
              </div>
          </div>
        </div>

     <?php endforeach; 
     }else{?>
        <br>
        <div class="alert alert-light" role="alert">
            <h4 class="alert-heading">Sin foros</h4>            
            <hr>
            <?php if($_SESSION['SRol']!=3){ ?>
                <p class="mb-0">Da click a "Crear foro" para publicar un nuevo foro</p>
            <?php } ?>
        </div>
     <?php } ?>
  </tbody>
  <!-- pie de la tabla-->
  <tfoot>
  </tfoot>
  </table>
