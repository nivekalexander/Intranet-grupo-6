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
        <?php $grupal="'".$filas->com_id."','".$filas->com_perprt."','".$filas->com_respst."'"; 
              $idcom = $filas->com_id;
        ?>
        <form id="comEdit" name="comEdit">
            <div class="card bg-light mb-5">
                <div class="card-header" >                                   
                    <div class="float-left">                        
                        <small><?php echo $filas->com_fchcrt;?><br></small>
                        <h4><?php echo $filas->com_perprt;?></h4>
                    </div>
                    <div class="float-right">
                        <a class="deleteCom" onclick="BorrarComentario(<?php echo $idcom; ?>);">
                            <img src="../assets/img/img-foro/trash.png" height="40" weidth="40" alt="X">
                        </a>
                    </div>
                </div>
                
                <div class="card-body">                    
                    <p class="card-text" id="mcomentario<?php echo $idcom;?>"><?php echo $filas->com_respst;?></p>
                    <textarea class="form-control" id="ecomentario<?php echo $idcom;?>" rows="3" name="ecomentario<?php echo $idcom;?>" hidden required><?php echo $filas->com_respst;?></textarea><br>
                    <div class="float-right">
                        <button id="btncomentar<?php echo $idcom;?>" class="btn-rounded btn" onclick="EditarComentario(<?php echo $idcom;?>);"> Editar </button> 
                        <button type="button" class="btn-rounded btn" data-toggle="collapse" data-target="#respuestaInsert<?php echo $idcom;?>" aria-expanded="false" aria-controls="collapseExample"> Responder </button>
                    </div>
                </div>
                <div class="collapse" id="respuestaInsert<?php echo $idcom;?>">
                    <div class="card card-body">
                        Panel respuestas
                    </div>
                </div>
            </div>
            
            </form>
        <?php endforeach; ?>        
    </tbody>
    <!-- pie de la tabla-->
    <tfoot>
    </tfoot>
    </table>

</div>