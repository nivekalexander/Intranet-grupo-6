<h3 class="noti-tittle">Grupos</h3><br><br>
<div class="row row-cols-1 row-cols-md-3">
    <?php foreach ( $this->grupos->Select() as $filas ): ?>
      <div class="col mb-4 card-deck">  
      <?php  $grupal = "'".$filas->fic_id."'"?>
        <div class="card bg-light mb-3 ">

          <div class="card-header font-weight-bold">
            <div class="float-left">
              <?php echo $filas->fic_codigo;?>
            </div>            
            <div class="float-right">
              <a href="perfil.php?id=925763" name="imagenPost"><img src="../assets/img/logosena.svg" width="40" height="40"></a>
            </div>
          </div>

          <div class="card-body">
            <h6 class="card-title font-weight-bold">Programa: </h6>
            <p class="card-text"><?php echo $filas->pfo_nompro;?></p>
            <h6 class="card-title font-weight-bold">Tipo: </h6>
            <p class="card-text"><?php echo $filas->tpr_nombre;?></p>
          </div>

          <div class="card-footer">
            <button class="float-right btn-rounded btn" data-toggle="modal" data-target="#modaltipoidentificacion" data-dismiss="modal" onclick="EditarTipoidentificacion(<?php echo $grupal; ?>)">Entrar</button>
          </div>

        </div>
      </div>
    <?php endforeach; ?>
</div> 