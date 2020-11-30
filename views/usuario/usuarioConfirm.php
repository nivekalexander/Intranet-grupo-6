<h4 class="tituloUsu">Seleccione un Usuario</h4>
<div class="container centrar-usu"> 
    <div class="row row-cols-1 row-cols-md-3">
        <?php foreach ($this->rol->Select() as $filas): ?>
            <?php $rolpuntero=$filas->rol_id;?>
            <div id="confirm" class="" value="<?php echo $filas->rol_id;?>">
                <img src="../assets/img/img-confirmUsu/imagen_usuarios_confirm.svg" class="img-thumbnail" alt="icono">
                <div class="row row-cols-1" > 
                    <input type="button" id="<?php echo"ad$rolpuntero"?>" class="btn btn-secondary btn-gris usuConfirm-text" value="<?php echo $filas->rol_nombre;?>" onclick="ConfirmUsuario(<?php echo $rolpuntero ?>);">
                </div>
            </div>
        <?php endforeach;?>
    </div>
</div>
