<div class="modal fade" id="confirmarDatos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmar datos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            <div class="form-group">
                <input type="email" class="form-control rounded-pill" id="mcorreo-perfil" placeholder="Correo"> 
            </div>
            <div class="form-group">
                <input type="password" class="form-control rounded-pill" id="mcontraseña-perfil" placeholder="Contraseña">
            </div>            
        </form>        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn-rounded btn" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn-rounded btn" onclick="<?php /*(condicion si coinciden los datos)*/ echo 'ConfirmarPerfil();' ?>">Confirmar</button>    
      </div>
    </div>
  </div>
</div>