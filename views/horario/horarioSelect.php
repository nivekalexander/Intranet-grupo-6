<table>
    <tbody>
    <?php
    $hor = $this->horario->Get($_SESSION['grupoficha']);   

    if($hor){                
        $grupal = "'".$hor->hor_id."','".$hor->hor_url."','".$hor->hor_triini."','".$hor->hor_trifin."','".$hor->hor_trinum."','".$hor->hor_ficcodigo."'";
        ?>
        <script>
            document.getElementById("crearhorario").innerHTML = "Actualizar horario";
        </script>
        <div class="card text-center w-100 diseño-tarjeta mt-lg-4">
            <div class="card-header" style="background-color: #F2994B; color: white;">
                <div class="float-left">Trimestre #<?php echo $hor->hor_trinum; ?></div>
                <div class="float-right">Fecha <?php echo $hor->hor_triini." | ".$hor->hor_trifin; ?></div>
            </div>
            <div class="card-body"><?php 
                if(file_exists($hor->hor_url)){
                    echo "<embed src=".$hor->hor_url." type='application/pdf' width='100%' height='600px'>";
                }else{
                    echo "No se encontro el archivo, posiblemente fue eliminado o no esta disponible";
                }
                ?>                
            </div>
            <div class="card-footer text-muted">
                <button class="btn btn-rounded" onclick="BorrarHorario('<?php echo $hor->hor_id;?>' , '<?php echo $hor->hor_url; ?>');">Eliminar</button>
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