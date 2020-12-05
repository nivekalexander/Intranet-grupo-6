<?php 
if(isset($respuesta)){
	echo "<div class='alert alert-danger' role='alert'>
				La ficha ya existe
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
                <th scope="col">Correo</th>
                <th scope="col">Ficha</th>
				<th scope="col">Rol</th>
                <th scope="col">Estado</th>
                <th scope="col">Tipo Identificaión</th>
				<th scope="col">Agregar Ficha</th>
				<th scope="col">Eliminar Ficha</th>
                <th scope="col">Editar</th>
				<th scope="col">Eliminar</th>
				<th scope="col" hidden></th>
				
			</tr>
		</thead>
	
		<!-- Cuerpo de la Tabla -->
		<tbody> 
			
				<?php foreach ($this->usuario->Select($rolpuntero) as $filas): ?>

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
						        <?php
									$_SESSION['usuariociclo']=$filas->usf_ficcodigo;
									foreach ($this->usuario->SelectFichaUsu($filas->usu_numdnt) as $datos): 										
										echo '<option value="'.$datos->usf_id .'">'.$datos->usf_ficcodigo.'</option>';
									endforeach;
								?>
							</select>
						</td>
                        <td scope="row"><?php echo $filas->rol_nombre;?></td>
                        <td scope="row"><?php echo $filas->est_nombre;?></td>
						<td scope="row"><?php echo $filas->tip_idntfc;?></td>
						<td scope="row" hidden><?php echo $filas->usu_rolid;?></td>
                        
						<td scope="row"><button class="btn-rounded btn" data-toggle="modal" data-target="#modalfichasAll" onclick="AgregarFicha(<?php echo $filas->usu_numdnt; ?>)">Agregar Ficha</button></td>
						<td scope="row"><button class="btn-rounded btn" data-toggle="modal" data-target="#modalfichasUSU" onclick="EliminarFicha(<?php echo $filas->usu_numdnt;?>)">Eliminar Ficha</button></td>
						<td scope="row"><button class="btn-rounded btn" data-toggle="modal" data-target="#modalusuario" data-dismiss="modal" onclick="EditarUsuario(<?php echo $grupal;?>,<?php echo $datos->usf_id;?>)">Editar</button></td>
						<td scope="row"><button class="btn-rounded btn" onclick="BorrarUsuario(<?php echo $eliminar ?>,<?php echo $datos->usf_id;?>);">Eliminar</button></td>
					
					</tr>

				<?php endforeach;?>
		</tbody>
	</table>
</div>


<!-- Modal 3 fichas 2-->
<div class="modal fade" id="modalfichasUSU" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="modalfichasUSULabel" aria-hidden="true">
  	<div class="modal-dialog">
    	<div class="modal-content">
      		<div class="modal-header">
				<h5 class="modal-title" id="modalfichasUSULabel">Eliminar Ficha</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="EliminarCancelar()">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			
			<div class="modal-body">
				<div class="container">
					<form  >
						<div class="form-group row">
							<label for="ficha">Identificacion De Usuario</label>
							<input class="form-control rounded" type="number" id="usuariofichaeliminar" readonly>
						</div>
						<div class="form-group row">
							<label for="ficha">Ingrese La Ficha A Eliminar</label>
							<input class="form-control rounded" type="number" id="fichaeliminar" required>
							
						</div>
						<div class="modal-footer">

							<button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="EliminarCancelar()">Cancelar</button>
							<button type="button" id="btnguardar3" class="btn btn-primary btn-rounded" data-dismiss="modal" onclick="EliminarFichaConfirmar()">Eliminar Ficha</button>

						</div>
					</form>
				</div>	
			</div>
		</div>
  </div>
</div>



