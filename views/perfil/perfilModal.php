<div class="modal fade" id="confirmarDatos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header Color-Slidebar">
        <h5 class="modal-title dropdown-text-color" id="exampleModalLabel">Escriba su contraseña para continuar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="formperfilconfirm">
        <form  name="formconfirmpass" id="formconfirmpass">
            <div class="form-group">
                <input type="password" class="form-control rounded-pill" id="contraseña" name="contraseña" placeholder="Contraseña" required>
            </div>   

             <div class="form-group">
                <input type="password" class="form-control rounded-pill" id="confirm" name="confirm" value="<?php foreach ( $this->usuario->SelectPerfil($_SESSION['SIdu']) as $filas ): echo $_SESSION['pass']=$filas->usu_passwd; endforeach;?>" hidden>
            </div>  

            <div class="modal-footer">
              <button type="button" class="btn-rounded btn-gris btn" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn-rounded btn" onclick="ConfirmarPerfil();">Confirmar</button>    
            </div>        
        </form>        
      </div>
    </div>
  </div>
</div>

<!-- modal cambiar contraseñas -->

<div class="modal fade" id="cambiarpass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header Color-Slidebar">
        <h5 class="modal-title dropdown-text-color" id="exampleModalLabel">Cambiar contraseña</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="formperfilconfirm">
        <form  name="formcambiarpass" id="formcambiarpass">

         <!-- Contraseña  -->

  <div class="form-group row">
    
     <div class="form-group row">   
        <div class="col-sm-12 input-group mb-2">            
            <input type="password" class="form-control rounded-pill" id="contraseña-perfil" placeholder="Nueva Contraseña" name="nuevacontraseña" readonly required>
            <?php  $_SESSION['pass']=$filas->usu_passwd; ?>
        </div>

        <div class="col-sm-12 input-group mb2">            
            <input type="password" class="form-control rounded-pill" id="contraseña-perfil" placeholder="Confirmar Contraseña" name="confirmarcontraseña" readonly required>
            <div id="ver-pass" class="rounded-circle ver-pass input-group-prepend" style="display: none;">
                <a id="visualizar-Pass" onclick="VisualizarPass();">
                    <img id="vpss" height="37" width="37" src="../assets/img/img-perfil/invisible.svg" alt="">
                </a>
            </div>
            </div>
        </div>
    </div>

            <div class="modal-footer">
              <button type="button" class="btn-rounded btn-gris btn" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn-rounded btn" onclick="CambiarContraseñaP();">Confirmar</button>    
            </div>        
        </form>        
      </div>
    </div>
  </div>
</div>