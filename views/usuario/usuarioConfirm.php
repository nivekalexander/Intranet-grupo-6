<div class="container">
    <?php foreach ($this->rol->Select() as $filas): ?>

        <?php $rolpuntero=$filas->rol_id;?>

        <div id="confirm" value="<?php echo $filas->rol_id;?>">
        <img src="../assets/img/img-confirmUsu/imagen_usuarios_confirm.svg" alt="icono">
        <div> 
        <input type="button"  class="btn btn-secondary btn-gris usuConfirm-text" value="<?php echo $filas->rol_nombre;?>" onclick="ConfirmUsuario(<?php echo $rolpuntero ?>);">
        </div>
        </div>
    <?php endforeach;?>
</div>
