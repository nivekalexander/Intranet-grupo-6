<div class="card container border rounded">
    <div class="card-header bg-white" >                                   
        <div class="card-tittle">
            <h5>Comentarios: <?php $num = $this->comentario->GetCount($_REQUEST['id']); echo $num->count;?> </h5><br>
        </div>
    </div>
    
    <table>
    <!--cuerpo de la tabla-->
    <tbody>
        
        <?php foreach ($this->comentario->Select($_REQUEST['id']) as $filas): ?>
        <?php $grupal="'".$filas->com_id."','".$filas->com_perprt."','".$filas->com_respst."'"; ?>

            <div class="card bg-light mb-5">
                <div class="card-header" >                                   
                    <div class="float-left">                        
                        <small><?php echo $filas->com_fchcrt;?><br></small>
                        <h4><?php echo $filas->com_perprt;?></h4>
                    </div>
                    <div class="float-right">
                        <a class="deleteCom" onclick="BorrarComentario(<?php echo $filas->com_id; ?>);">
                            <img src="../assets/img/img-foro/trash.png" height="40" weidth="40" alt="X">
                        </a>
                    </div>
                </div>
                
                <div class="card-body">                    
                    <p class="card-text"><?php echo $filas->com_respst;?></p>
                    <div class="float-right">
                        <a class="btn-rounded btn" href="#comforo" onclick="EditarComentario(<?php echo $grupal;?>);"> Editar </a> 
                        <button type="button" class="btn-rounded btn" data-toggle="collapse" data-target="#respuestaInsert<?php echo $filas->com_id;?>" aria-expanded="false" aria-controls="collapseExample"> Responder </button>
                    </div>
                </div>
                <div class="collapse" id="respuestaInsert<?php echo $filas->com_id;?>">
                    <div class="card card-body">
                        Panel respuestas
                    </div>
                </div>
            </div>
            

        <?php endforeach; ?>
    </tbody>
    <!-- pie de la tabla-->
    <tfoot>
    </tfoot>
    </table>

</div>