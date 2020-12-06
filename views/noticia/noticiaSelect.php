<table>
    <tbody>
    <?php
    $noticias = $this->noticia->Select();
    if($noticias){
        foreach ($noticias as $filas):  ?>
            <div class="card text-center w-100 diseño-tarjeta mt-lg-4">
                <div class="card-header" style="background-color: #F2994B; color: white;">
                    <div class="float-right"> <?php echo $filas->not_fech; ?> </div>
                </div>
                <div class="card-body">
                    <img src="<?php echo $filas->not_url; ?>" class="card-img" alt="No se encontro">
                </div>
                <div class="card-footer text-muted">

                    <?php if($_SESSION['SRol']==1){ ?>

                        <button class="btn btn-rounded" onclick="EditarNoticia('<?php echo $filas->not_id;?>' , '<?php echo $filas->not_url; ?>');">Editar</button>
                        <button class="btn btn-rounded" onclick="BorrarNoticia('<?php echo $filas->not_id;?>' , '<?php echo $filas->not_url; ?>');">Eliminar</button>
                
                    <?php } ?>

                </div>
            </div>
        <?php endforeach; 
    }else{?>
        <br>
        <div class="alert alert-light" role="alert">
            <h4 class="alert-heading">Sin noticias</h4>            
            <hr>
            <?php if($_SESSION['SRol']==1){ ?>
                <p class="mb-0">Da click a "Crear noticia" para mostrar una nueva noticia</p>
            <?php } ?>
        </div>
    <?php } ?>
    </tbody>
</table>