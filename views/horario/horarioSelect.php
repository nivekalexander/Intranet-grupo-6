<table>
    <tbody>
    <?php
    $hor = $this->horario->Get();
    $rows = $hor->fetch(PDO::FETCH_NUM);
    
    if($rows[0] >= 1){        
        $datos = $this->horario->Get()->fetch(PDO::FETCH_OBJ);
        $grupal = "'".$datos->hor_id."','".$datos->hor_url."','".$datos->hor_triini."','".$datos->hor_trifin."','".$datos->hor_trinum."','".$datos->hor_ficid."'";
        ?>
        <script>
            document.getElementById("crearhorario").innerHTML = "Actualizar horario";
        </script>
        <div class="card text-center w-100 diseño-tarjeta mt-lg-4">
            <div class="card-header" style="background-color: #F2994B; color: white;">
                <div class="float-left">Trimestre #<?php echo $datos->hor_trinum; ?></div>
                <div class="float-right">Fecha <?php echo $datos->hor_triini." | ".$datos->hor_trifin; ?></div>
            </div>
            <div class="card-body">
                <embed src="<?php echo $datos->hor_url; ?>" type="application/pdf" width="100%" height="600px" />
            </div>
            <div class="card-footer text-muted">
                <button class="btn btn-rounded" onclick="EliminarHorario('<?php echo $datos->hor_id;?>' , '<?php echo $datos->hor_url; ?>');">Eliminar</button>
                <input type="button" id="actualizar-horario" onclick="EditarHorario(<?php echo $grupal;?>);" hidden>
            </div>
        </div>
    <?php
    }else{?>
        <div class="card text-center w-100 diseño-tarjeta mt-lg-4">
            <div class="card-header" style="background-color: #F2994B; color: white;">

            </div>
            <div class="card-body">
                Sin horario
            </div>
            <div class="card-footer text-muted">
                
            </div>
        </div>
    <?php
    }?>
        
    </tbody>
</table>