<form class="formulario">
    <!-- Identificación -->
    <div class="form-group row">
        <label for="id-perfil" class="col-sm-4 col-form-label">Identificación</label>
        <div class="col-sm-8">
            <input type="text" class="form-control rounded-pill" id="id-perfil" value="805885441" readonly>
        </div>
    </div>
    <!-- Nombre -->
    <div class="form-group row">
        <label for="nombre-perfil" class="col-sm-4 col-form-label">Nombre</label>
        <div class="col-sm-8">
            <input type="text" class="form-control rounded-pill" id="nombre-perfil" value="Marcela" readonly>
        </div>
    </div>
    <!-- Apellido -->
    <div class="form-group row">
        <label for="apellido-perfil" class="col-sm-4 col-form-label">Apellido</label>
        <div class="col-sm-8">
            <input type="text" class="form-control rounded-pill" id="apellido-perfil" value="De Saris" readonly>
        </div>
    </div>
    <!-- Contraseña  -->
    <div class="form-group row">
        <label for="contraseña-perfil" class="col-sm-4 col-form-label">Contraseña</label>        
        <div class="col-sm-8 input-group mb-2">            
            <input type="password" class="form-control rounded-pill" id="contraseña-perfil" value="144456" readonly>
            <div id="ver-pass" class="rounded-circle ver-pass input-group-prepend" style="display: none;">
                <a id="visualizar-Pass" onclick="VisualizarPass();">
                    <img height="37" width="37" src="https://www.flaticon.es/svg/static/icons/svg/40/40498.svg" alt="">
                </a>
            </div>
        </div>
    </div>
    <!-- Correo -->
    <div class="form-group row">
        <label for="correo-perfil" class="col-sm-4 col-form-label">Correo</label>
        <div class="col-sm-8">
            <input type="email" class="form-control rounded-pill" id="correo-perfil" value="Marcela@gmail.com" readonly>
        </div>
    </div>
    <br><br>
    <center>
        <input type="button" class="btn-rounded btn editar-perfil" id="editar-perfil" data-toggle="modal" data-target="#confirmarDatos" value="Editar">
        <input type="button" class="btn-rounded btn editar-perfil" id="actualizar-perfil" value="Actualizar" onclick="ActualizarPerfil();" hidden>        
    </center>
</form>
