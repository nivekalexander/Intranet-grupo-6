<?php 
if(isset($respuesta)){
	echo "<div class='alert alert-danger' role='alert'>
				El usuario ya existe
		  </div>";
}
?>

<?php $_SESSION['rolpuntero']=$rolpuntero; ?>

<div><a class="btn-rounded btn float-right " data-toggle="modal" data-target="#modalusuario" onclick="ConfirmUsuario(<?php echo $rolpuntero; ?>);">Crear Usuario</a></div>
<button class="btn-rounded btn redirigir" onclick="SeleccionarUsuario();">Volver</button><br><br>

<div class="table-responsive">
	<table id="tableusuario"  class="table table-striped">
		<!-- Cabecera de la Tabla -->
		<thead class="thead-dark">
			<tr>
				<th scope="col" ><?php echo $_SESSION['rolpuntero'] != 3 ? 'N° Identificaión':'N° Identificador de ficha'; ?></th>
				<th scope="col" ><?php echo $_SESSION['rolpuntero'] != 3 ? 'Nombre':'Nombre Abreviatura'; ?></th>
				<th scope="col"><?php echo $_SESSION['rolpuntero'] != 3 ? 'Apellido':'Numero ficha'; ?></th></th>
				<th scope="col" hidden>Contraseña</th>
                <th scope="col"><?php echo $_SESSION['rolpuntero'] != 3 ? 'Correo':'Nombre de usuario'; ?></th></th></th>
                <th scope="col">Ficha</th>
				<th scope="col">Rol</th>
                <th scope="col">Estado</th>
                <th scope="col" <?php echo $_SESSION['rolpuntero'] != 3 ? '':'hidden'; ?>>Tipo Identificaión</th>
				<th scope="col">Agregar Ficha</th>
				<th scope="col">Eliminar Ficha</th>
                <th scope="col">Editar</th>
				<th scope="col">Eliminar</th>
				<th scope="col" hidden></th>
				
			</tr>
		</thead>
	
		<!-- Cuerpo de la Tabla -->
		<tbody> 
			
				<?php $ct = 0;
					foreach ($this->usuario->Select($rolpuntero) as $filas): 
					$ids[$ct] = $filas->usu_numdnt; $ct = $ct + 1;
					?>

					<?php $grupal = "'".$filas->usu_numdnt."','".$filas->usu_nombre."','".$filas->usu_aplldo."','".$filas->usu_passwd."','".$filas->usu_correo."','".$filas->usu_rolid."','".$filas->usu_estid."','".$filas->usu_tipid."'";?>
					<?php $eliminar = "'".$filas->usu_numdnt."','".$filas->usu_rolid."'"; ?>
					<tr>
						<td scope="row"><?php echo $filas->usu_numdnt; ?></td>
						<td scope="row"><?php echo $filas->usu_nombre; ?></td>
						<td scope="row"><?php echo $filas->usu_aplldo; ?> </td>
                        <td scope="row" hidden><?php echo $filas->usu_passwd; ?></td>
                        <td scope="row"><?php echo $filas->usu_correo;?></td>
                        <td scope="row">
						
							<select class="rounded">
						        <?php $idss;
									$_SESSION['usuariociclo']=$filas->usf_ficcodigo;
									$fichaIDUsu = $this->usuario->SelectFichaUsu($filas->usu_numdnt);
									if($fichaIDUsu){
										foreach ($fichaIDUsu as $datos): 										
											echo '<option value="'.$datos->usf_id .'">'.$datos->usf_ficcodigo.'</option>';
										endforeach;
									}else{
										echo '<option value="0">Sin fichas</option>';
									}
									
								?>
							</select>
						</td>
                        <td scope="row"><?php echo $filas->rol_nombre;?></td>
                        <td scope="row"><?php echo $filas->est_nombre;?></td>
						<td scope="row" <?php echo $_SESSION['rolpuntero'] != 3 ? '':'hidden'; ?>><?php echo $filas->tip_idntfc;?></td>
						<td scope="row" hidden><?php echo $filas->usu_rolid;?></td>
                        
						<td scope="row"><button class="btn-rounded btn" onclick="AgregarFicha(<?php echo $filas->usu_numdnt; ?>)">Agregar Ficha</button></td>
						<td scope="row"><button class="btn-rounded btn" onclick="EliminarFicha(<?php echo $filas->usu_numdnt;?>)">Eliminar Ficha</button></td>
						<td scope="row"><button class="btn-rounded btn" data-toggle="modal" data-target="#modalusuario" data-dismiss="modal" onclick="EditarUsuario(<?php echo $grupal;?>,<?php echo $datos->usf_id;?>)">Editar</button></td>
						<td scope="row"><button class="btn-rounded btn" onclick="BorrarUsuario(<?php echo $eliminar ?>,<?php echo $datos->usf_id;?>);">Eliminar</button></td>
					
					</tr>

				<?php endforeach;?>
		</tbody>
	</table>
</div>




