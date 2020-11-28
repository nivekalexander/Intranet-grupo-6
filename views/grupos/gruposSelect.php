
<div class="row row-cols-1 row-cols-md-3">
    <?php foreach ( $this->grupos->Select() as $filas ): ?>
      <div class="col mb-4 card-deck">  
      <?php  $grupal = "'".$filas->fic_id."'"?>
        <div class="card bg-light mb-3 ">

          <div class="card-header font-weight-bold">
            <div class="float-left noti-tittle" style="font-size: 25px;">
             <?php echo $filas->fic_codigo;?>
            </div>            
            <div class="float-right">
              <a  name="imagenPost"><img src="../assets/img/logosena.svg" width="40" height="40"></a>
            </div>
          </div>

          <div class="card-body">
            <h6 class="card-title font-weight-bold">Programa: </h6>
            <p class="card-text"><?php echo $filas->pfo_nompro;?></p>
            <h6 class="card-title font-weight-bold">Tipo: </h6>
            <p class="card-text"><?php echo $filas->tpr_nombre;?></p>
          </div>

          <div class="card-footer">
            <a class="nav-link  float-right btn-rounded btn" onclick="menuGruposeleccion('anuncio',<?php echo $filas->fic_id;?>);">Entrar</a>
            <?php $_SESSION['fichapuntero']=$filas->fic_id; ?>
          </div>

        </div>
      </div>
    <?php endforeach; ?>
</div> 
