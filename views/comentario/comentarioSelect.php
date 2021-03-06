<div class="card container border rounded">

    <div class="card-header bg-white" >                                   
        <div class="card-tittle">
            <h5>Comentarios: <?php $num = $this->comentario->GetCount($_REQUEST['id']); echo $num->count;?> </h5><br>
        </div>
    </div>
    
    <table>
    
    <tbody>
        <?php /*Apartado de Comentario */ ?>
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

                    <?php if($_SESSION['SIdu'] == $filas->com_usunumdnt || $_SESSION['SRol']==1){ 
                        
                        ?>

                        <a class="deleteCom" onclick="BorrarComentario(<?php echo $idcom; ?>);">
                            <img src="../assets/img/img-foro/trash.svg" height="40" weidth="40" alt="X">
                        </a>

                    <?php } ?>

                    </div>
                </div>
                
                <div class="card-body">                    
                    <p class="card-text" id="mcomentario<?php echo $idcom;?>"><?php echo $filas->com_respst;?></p>
                    <textarea class="form-control" id="ecomentario<?php echo $idcom;?>" rows="3" name="ecomentario<?php echo $idcom;?>" hidden required><?php echo $filas->com_respst;?></textarea><br>
                    <div class="float-right">

                        <?php if($_SESSION['SIdu'] == $filas->com_usunumdnt || $_SESSION['SRol']==1){ 

                            ?>

                            <button id="btncomentar<?php echo $idcom;?>" class="btn-rounded btn" onclick="EditarComentario(<?php echo $idcom;?>);"> Editar </button> 
                            
                        <?php } ?>    
                            
                            <button type="button" class="btn-rounded btn" data-toggle="collapse" data-target="#respuestaInsert<?php echo $idcom;?>" aria-expanded="false" aria-controls="collapseExample"> Responder </button>
                       
                        
                    
                    
                    </div>
                    <div class="float-left">                        
                       <button type="button" class="btn btn-gris" data-toggle="collapse" data-target="#respuestaSelect<?php echo $idcom;?>" aria-expanded="false" aria-controls="collapseExample" > Ver respuestas: <?php echo $filas->respuestas;?> </button>
                    </div>
                </div>

                <!-- Capa Insertar Respuesta -->
                <div class="collapse container rounded-bottom" id="respuestaInsert<?php echo $idcom;?>">
                    <br>
                    <div class="card card-body mb-2 border border-secondary">
                        <form id="formularioCollR" name="formularioCollR" autocomplete="off">

                            <input type="text" id="resid" name="resid" hidden>
                            <div class="form-group">
                                <label for="rnombre">Nombre</label>                                
                                <input type="text" class="form-control" id="rnombre<?php echo $idcom;?>" name="rnombre">
                            </div>

                            <div class="form-group">
                                <label for="rcomentario">Comentario</label>
                                <textarea class="form-control" id="rcomentario<?php echo $idcom;?>" rows="3" name="rcomentario"></textarea>
                            </div>                            
                            <div class="card-footer bg-white">
                                <div class="float-right">
                                    <button type="button" id="btnresponder" class="btn-rounded btn" onclick="InsertRespuesta(<?php echo $idcom;?>);">Enviar</button> 
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>

                <!-- Capa Mostrar Respuestas -->
                <div class="collapse container rounded-bottom" id="respuestaSelect<?php echo $idcom;?>" style="background-color:  #858796;">
                    <br>      
                    <div id="capa-respuestas<?php echo $idcom;?>">
                        <?php
                            $allrs = $this->comentario->SelectResp($idcom);

                            if($allrs){

                                foreach ($allrs as $respuestas): 
                                $idresp = $respuestas->res_id;
                                ?>
        
                                    <div class="card mb-2">
                                        <div class="card-header">
                                            <div class="float-left">
                                                <?php echo $respuestas->res_perprt; ?>
                                            </div>                                            
                                            <div class="float-right">
                                                <small><?php echo $respuestas->res_fchcrt; ?></small> 

                                                <?php if($_SESSION['SIdu'] == $respuestas->res_usunumdnt || $_SESSION['SRol']==1){ 
                                                    
                                                    ?>

                                                <a class="deleteRes" onclick="BorrarRespuesta('<?php echo $idresp; ?>','<?php echo $idcom; ?>');">
                                                    <img src="../assets/img/img-foro/trash.svg" height="30" weidth="30" alt="X">                                                
                                                </a>    

                                                <?php } ?>

                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text" id="mrcomentario<?php echo $idresp; ?>"><?php echo $respuestas->res_respst; ?></p>
                                            <textarea class="form-control" id="ercomentario<?php echo $idresp;?>" rows="3" name="ercomentario" hidden><?php echo $respuestas->res_respst; ?></textarea>
                                            <br>
                                            <div class="float-right">

                                            <?php if($_SESSION['SIdu'] == $respuestas->res_usunumdnt || $_SESSION['SRol']==1){ 
                                                
                                                ?>

                                                <a id="imgeditar<?php echo $idresp; ?>" class="editRes" onclick="EditarRespuesta(<?php echo $idresp; ?>);">
                                                    <img src="../assets/img/img-foro/pen.png" height="30" weidth="30" alt="Editar">
                                                </a>

                                            <?php } ?>

                                                <input class="btn btn-rounded" id="btnresponder<?php echo $idresp; ?>" onclick="UpdateRespuesta('<?php echo $idresp; ?>','<?php echo $idcom; ?>');" value="Actualizar" hidden>
                                            </div>
                                        </div>
                                    </div>
                                    
                                <?php endforeach; 

                            }else{
                                echo    "<div class='alert alert-light' role='alert'>
                                            No hay respuestas
                                        </div>";
                            }
                            
                            ?>  
                        
                    </div> 
                    <br>             
                </div>
            </div>
            
            </form>
        <?php endforeach; ?> 

        <?php /*Apartado de Comentario Fin */ ?>       
    </tbody>
    <!-- pie de la tabla-->
    <tfoot>
    </tfoot>
    </table>

</div>