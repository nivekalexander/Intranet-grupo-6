<?php foreach ( $this->usuario->SelectPerfil($_SESSION['SIdu']) as $filas ): ?>

<br><br>
<form id="formulario" name="formulario" class="formulario responsive">

    <input type="text" id="rolperfilasd" value="<?php echo  $_SESSION['SRol']?>" hidden>

    <!-- campos para validaciones -->

    <input type="text" id="NumIdhidden" name="NumIdhidden" value="<?php echo  $_SESSION['SIdu']=$filas->usu_numdnt; ?>" hidden>
    <input type="text" id="Namehidden" name="Namehidden" value="<?php echo $_SESSION['name']=$filas->usu_nombre; ?>" hidden>
    <input type="text" id="Lasthidden" name="Lasthidden" value="<?php echo $_SESSION['last']=$filas->usu_aplldo;?>" hidden>
    <input type="text" id="Emailhidden" name="Emailhidden" value="<?php echo $_SESSION['SUsu']=$filas->usu_correo; ?>" hidden>

    <!-- Identificación -->
    <div class="form-group row">
        <label for="id-perfil" class="col-sm-4 col-form-label">Identificación</label>
        <div class="col-sm-8">
            <input type="text" class="form-control rounded-pill" id="id-perfil" name="idperfil" value="<?php echo  $_SESSION['SIdu']=$filas->usu_numdnt; ?>" readonly required> 
        </div>  	
    </div>
    <!-- Nombre -->
    <div class="form-group row">
        <label for="nombre-perfil" class="col-sm-4 col-form-label"><?php echo $_SESSION['SRol'] !=3 ? 'Nombre':'Abreviatura';?></label>
        <div class="col-sm-8">
            <input type="text" class="form-control rounded-pill" id="nombre-perfil" name="nombreperfil" value="<?php echo $_SESSION['name']=$filas->usu_nombre; ?>" readonly required>
        </div>
    </div>
    <!-- Apellido -->
    <div class="form-group row">
        <label for="apellido-perfil" class="col-sm-4 col-form-label"><?php echo $_SESSION['SRol'] !=3 ? 'Apellido':'N° Ficha';?></label>
        <div class="col-sm-8">
            <input type="text" class="form-control rounded-pill" id="apellido-perfil" name="apellidoperfil" value="<?php echo $_SESSION['last']=$filas->usu_aplldo;?>" readonly required>
        </div>
    </div>
   
    <!-- Correo -->
    <div class="form-group row">
        <label for="correo-perfil" class="col-sm-4 col-form-label"><?php echo $_SESSION['SRol'] !=3 ? 'Correo':'Usuario';?></label>
        <div class="col-sm-8">
            <input type="email" class="form-control rounded-pill" id="correo-perfil" name="correoperfil" value="<?php echo $_SESSION['SUsu']=$filas->usu_correo; ?>" readonly required>
        </div>
    </div><br><br>

    <center>

        <?php if( $_SESSION['SRol'] != 3){?>    

            <input type="button" class="btn-rounded btn editar-perfil" id="editar-perfil" data-toggle="modal" data-target="#confirmarDatos" value="Editar">
            <input type="button" class="btn-rounded btn editar-perfil" id="actualizarpass" data-toggle="modal" data-target="#cambiarpass" value="Cambiar Contraseña" hidden>    
            <input type="button" class="btn-rounded btn editar-perfil" id="actualizar-perfil" value="    Actualizar Perfil    " onclick="ActualizarPerfil();" hidden>    
    
        <?php }?>
    
    </center>
</form>

<?php endforeach; ?>


