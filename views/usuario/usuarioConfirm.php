<div class="container ">
    <div class="row row-cols-1 row-cols-md-3">
        <?php foreach ($this->rol->Select() as $filas): ?>
            <?php $rolpuntero=$filas->rol_id;?>
            <div id="confirm" class="centrar-usu" value="<?php echo $filas->rol_id;?>">
                <img src="../assets/img/img-confirmUsu/imagen_usuarios_confirm.svg" alt="icono">
                <div class="centrar-usu" > 
                    <input type="button" class="btn btn-secondary btn-gris usuConfirm-text" value="<?php echo $filas->rol_nombre;?>" onclick="ConfirmUsuario(<?php echo $rolpuntero ?>);">
                </div>
            </div>
        <?php endforeach;?>
    </div>
</div>
