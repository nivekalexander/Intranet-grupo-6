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
        <?php $grupal="'".$filas->com_id."','".$filas->com_respst."','".$filas->com_fchcrt."','".$filas->com_perprt."','".$filas->com_forid."'"; ?>
            
            <div class="card bg-light mb-5 w-100 diseño-tarjeta">
                <div class="card-header " >                                   
                    <div class="float-left">                        
                        <?php echo $filas->com_fchcrt;?><br>
                        <?php echo $filas->com_perprt;?>
                    </div>
                </div>
                
                <div class="card-body">                    
                    <p class="card-text"><?php echo $filas->com_respst;?></p>
                    <div class="float-right">
                        <button type="button" class="btn-rounded btn"> Responder </button>
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