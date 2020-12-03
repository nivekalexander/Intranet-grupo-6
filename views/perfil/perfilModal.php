<div class="modal fade" id="confirmarDatos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header Color-Slidebar">
        <h5 class="modal-title dropdown-text-color" id="exampleModalLabel">Escriba su contraseña para continuar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form  name="formconfirmpass" id="formconfirmpass">
            <div class="form-group">
                <input type="password" class="form-control rounded-pill" id="contraseña" name="contraseña" placeholder="Contraseña" required>
            </div>   

             <div class="form-group">
                <input type="password" class="form-control rounded-pill" id="confirm" name="confirm" value="<?php echo $_SESSION['pass'];?>" hidden>
            </div>  

            <div class="modal-footer">
              <button type="button" class="btn-rounded btn" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn-rounded btn" onclick="ConfirmarPerfil();">Confirmar</button>    
            </div>        
        </form>        
      </div>
    </div>
  </div>
</div>