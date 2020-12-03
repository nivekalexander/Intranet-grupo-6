<?php foreach ( $this->usuario->SelectPerfil($_SESSION['SIdu']) as $filas ): ?>


<form id="formulario" name="formulario" class="formulario responsive">
    <!-- Identificación -->
    <div class="form-group row">
        <label for="id-perfil" class="col-sm-4 col-form-label">Identificación</label>
        <div class="col-sm-8">
            <input type="text" class="form-control rounded-pill" id="id-perfil" name="idperfil" value="<?php echo  $_SESSION['SIdu']=$filas->usu_numdnt; ?>" readonly> 
        </div>  	
    </div>
    <!-- Nombre -->
    <div class="form-group row">
        <label for="nombre-perfil" class="col-sm-4 col-form-label">Nombre</label>
        <div class="col-sm-8">
            <input type="text" class="form-control rounded-pill" id="nombre-perfil" name="nombreperfil" value="<?php echo $_SESSION['name']=$filas->usu_nombre; ?>" readonly>
        </div>
    </div>
    <!-- Apellido -->
    <div class="form-group row">
        <label for="apellido-perfil" class="col-sm-4 col-form-label">Apellido</label>
        <div class="col-sm-8">
            <input type="text" class="form-control rounded-pill" id="apellido-perfil" name="apellidoperfil" value="<?php echo $_SESSION['last']=$filas->usu_aplldo;?>" readonly>
        </div>
    </div>
    <!-- Contraseña  -->
    <div class="form-group row">
        <label for="contraseña-perfil" class="col-sm-4 col-form-label">Contraseña</label>        
        <div class="col-sm-8 input-group mb-2">            
            <input type="password" class="form-control rounded-pill" id="contraseña-perfil" name="contraseñaperfil" value="<?php echo $_SESSION['pass']=$filas->usu_passwd; ?>" readonly>
            <div id="ver-pass" class="rounded-circle ver-pass input-group-prepend" style="display: none;">
                <a id="visualizar-Pass" onclick="VisualizarPass();">
                    <img height="37" width="37" src="../assets/img/img-perfil/visualizar.svg" alt="">
                </a>
            </div>
        </div>
    </div>
    <!-- Correo -->
    <div class="form-group row">
        <label for="correo-perfil" class="col-sm-4 col-form-label">Correo</label>
        <div class="col-sm-8">
            <input type="email" class="form-control rounded-pill" id="correo-perfil" name="correoperfil" value="<?php echo $_SESSION['SUsu']=$filas->usu_correo; ?>" readonly>
        </div>
    </div>
    <br><br>
    <center>
        <input type="button" class="btn-rounded btn editar-perfil" id="editar-perfil" data-toggle="modal" data-target="#confirmarDatos" value="Editar">
        <input type="button" class="btn-rounded btn editar-perfil" id="actualizar-perfil" value="Actualizar" onclick="ActualizarPerfil();" hidden>        
    </center>
</form>

<?php endforeach; ?>


