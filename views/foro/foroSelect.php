
  <table>
  <!--cuerpo de la tabla-->
  <tbody>
    
    <?php foreach ($this->foro->Select($fichapuntero) as $filas): ?>
      <?php $grupal="'".$filas->for_id."','".$filas->for_titulo."','".$filas->for_fchfin."','".$filas->for_fchini."','".$filas->for_descrp."'" ?>

        <div class="d-flex justify-content-center">
          <div class="card bg-light mb-5 w-100 diseño-tarjeta">
              <div class="card-header " >
                <div class="float-left mr-5" >
                  <a name="imagenPost"><img src="../assets/img/img-slidebar/foro.svg" width="40" height="40"></a>
                </div>                
                <div class="float-left">
                  Fecha inicio: <?php echo $filas->for_fchini;?><br>
                  Fecha fin:    <?php echo $filas->for_fchfin;?>
                </div>
              </div>
            
              <div class="card-body">
                <h5 class="card-title">Titulo: <?php echo $filas->for_titulo; ?></h5>
                <p class="card-text"><?php echo $filas->for_descrp;?></p>
                <div class="float-right">
                  <button type="button" class="btn-rounded btn"> Participar </button>
                  <button class="btn-rounded btn" data-toggle="modal" onclick="EditarForo(<?php echo $grupal; ?>);">Editar</button>
                  <button type="button" class="btn-rounded btn" onclick="BorrarForo('<?php echo $filas->for_id;?>');"> Eliminar </button>
                </div>
              </div>
          </div>
        </div>

     <?php endforeach; ?>
  </tbody>
  <!-- pie de la tabla-->
  <tfoot>
  </tfoot>
  </table>
