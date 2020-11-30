<form id="formularioColl" name="formularioColl" autocomplete="off">
        <input type="text" id="comid" name="comid" hidden>
    <div class="form-group row">
        <label for="cnombre" class="col-sm-2">Nombre</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="cnombre" name="cnombre">            
        </div>
    </div>

    <div class="form-group">
        <label for="ccomentario">Comentario</label>
        <textarea class="form-control" id="ccomentario" rows="3" name="ccomentario"></textarea>        
    </div>

        <input type="text" id="forid" name="forid" value="<?php echo $_REQUEST['id'];?>" hidden>

    <div class="float-right">
        <button type="button" id="btnenviar" class="btn-rounded btn" onclick="InsertComentario();">Enviar</button>                        
    </div>
</form>

