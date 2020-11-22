<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <form name="formforo" id="formforo" onSubmit="CrearForo(); return false">
                <div class="form-group">
                    <input type="text" name="foro_id" hidden> <br>
                        <td width="30%" >Titulo </td>
                        <td><input type="text" name="foro_titulo"></td>
                        <textarea id="txt-content" name="foro_mensaje"></textarea>
                        <label for="foro_fecha_inicio"> Fecha inicio: </label> <br>
                        <input type="date" name="foro_fecha_inicio"> <br>

                        <label for="foro_fecha_fin"> Fecha fin: </label> <br>
                        <input type="date" name="foro_fecha_fin"> <br>


                    </div>
                    <input type="submit" class="btn btn-default" id="btnguardar" value="enviar">
                </form>
            </div>
        </div>

    </div>
</div>
