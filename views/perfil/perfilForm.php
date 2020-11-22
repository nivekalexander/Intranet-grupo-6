<form class="form-perfil">
    <!-- Nombre -->
    <div class="form-group row">
        <label for="nombre-perfil" class="col-sm-2 col-form-label">Nombre</label>
        <div class="col-sm-10">
            <input type="text" class="form-control rounded-pill" id="nombre-perfil" value="Marcela" readonly>
        </div>
    </div>
    <!-- Apellido -->
    <div class="form-group row">
        <label for="apellido-perfil" class="col-sm-2 col-form-label">Apellido</label>
        <div class="col-sm-10">
            <input type="text" class="form-control rounded-pill" id="apellido-perfil" value="De Saris" readonly>
        </div>
    </div>
    <!-- Contraseña  -->
    <div class="form-group row">
        <label for="contraseña-perfil" class="col-sm-2 col-form-label">Contraseña</label>
        <div class="col-sm-10">
            <input type="password" class="form-control rounded-pill" id="contraseña-perfil" value="123456" readonly>
        </div>
    </div>
    <!-- Identificación -->
    <div class="form-group row">
        <label for="id-perfil" class="col-sm-2 col-form-label">Identificación</label>
        <div class="col-sm-10">
            <input type="text" class="form-control rounded-pill" id="id-perfil" value="1005885321" readonly>
        </div>
    </div>
    <!-- Correo -->
    <div class="form-group row">
        <label for="correo-perfil" class="col-sm-2 col-form-label">Correo</label>
        <div class="col-sm-10">
            <input type="email" class="form-control rounded-pill" id="correo-perfil" value="Marcela@gmail.com" readonly>
        </div>
    </div>
    <br><br>
    <center>
        <input type="button" class="btn-rounded btn editar-perfil" id="editar-perfil" data-toggle="modal" data-target="#confirmarDatos" value="Editar">
        <input type="button" class="btn-rounded btn editar-perfil" id="actualizar-perfil" value="Actualizar" onclick="ActualizarPerfil();" hidden>        
    </center>
</form>
