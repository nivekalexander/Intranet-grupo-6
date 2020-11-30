<div class="container">
    <input type="text" id="fichapuntero" value="<?php echo $_REQUEST['fcpt'];?>" hidden>
    <ul class="listconfirmMaterialApoyo">
        <div id="contenidofases">
        <?php foreach ( $this->fases->Select() as $filas ): ?>

        <li class="">
        <h3 id="nombre"><?php echo $filas->fas_nombre?>
        <input class="btn-rounded btn float-right" type="button" value="Ingresar" onclick="FasesMaterialApoyo(<?php echo $filas->fas_id;?>)"></h3>
        
        </li>

        <?php endforeach; ?>
        </div>
    </ul>

</div>