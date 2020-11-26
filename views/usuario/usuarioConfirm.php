
<div>
    <?php foreach ($this->rol->Select() as $filas): ?>

        <span class="border border-warning" id="confirm" value="<?php echo $filas->rol_id;?>" onclick="ConfirmUsuario(<?php echo $filas->rol_id;?>);"></span>
        <label class="usuConfirm-text"><?php echo $filas->rol_nombre;?></label>

    <?php endforeach;?>
</div>