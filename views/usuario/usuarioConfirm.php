
<div>
    <?php foreach ($this->rol->Select() as $filas): ?>

        <div class="border-warning" id="confirm" value="<?php echo $filas->rol_id;?>" ></div>
        
        <input type="button"  class="btn btn-secondary btn-gris usuConfirm-text" value="<?php echo $filas->rol_nombre;?>" onclick="ConfirmUsuario();">
        

    <?php endforeach;?>
</div>