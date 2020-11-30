<form id="formularioColl" name="formularioColl" class="needs-validation" autocomplete="off" novalidate>
        <input type="text" id="comid" name="comid" hidden>
    <div class="form-group row">
        <label for="cnombre" class="col-sm-2">Nombre</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="cnombre" name="cnombre" required>
        <div class="invalid-feedback">Ingrese su nombre.</div><br>
        </div>
    </div>

    <div class="form-group">
        <label for="ccomentario">Comentario</label>
        <textarea class="form-control" id="ccomentario" rows="3" name="ccomentario" required></textarea>
        <div class="invalid-feedback">Complete el campo.</div><br>
    </div>

        <input type="text" id="forid" name="forid" value="<?php echo $_REQUEST['id'];?>" hidden>

    <div class="float-right">
        <button type="button" id="btnenviar" class="btn-rounded btn" onclick="InsertComentario();">Enviar</button>                        
    </div>
</form>

