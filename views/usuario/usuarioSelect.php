<div><a class="btn-rounded btn float-right " data-toggle="modal" data-target="#modalusuario">Crear Usuario</a></div>

<div class="table-responsive">
	<table id="tableusuario"  class="table table-striped">
		<!-- Cabecera de la Tabla -->
		<thead class="thead-dark">
			<tr>
				<th scope="col" >Nombre</th>
				<th scope="col">Apellido</th>
				<th scope="col">Contraseña</th>
                <th scope="col">Correo</th>
                <th scope="col">Ficha</th>
				<th scope="col">Rol</th>
                <th scope="col">Estado</th>
                <th scope="col">Tipo Identificaión</th>
                <th scope="col">Editar</th>
				<th scope="col">Eliminar</th>
				<th scope="col" hidden></th>
				
			</tr>
		</thead>
	
		<!-- Cuerpo de la Tabla -->
		<tbody> 
				<?php foreach ($this->usuario->Select($rolpuntero) as $filas): ?>

					<?php $grupal = "'".$filas->usu_id."','".$filas->usu_nombre."','".$filas->usu_aplldo."','".$filas->usu_passwd."','".$filas->usu_correo."','".$filas->usu_ficid."','".$filas->usu_rolid."','".$filas->usu_estid."','".$filas->usu_tipid."'";?>

					<tr>
						<td scope="row"><?php echo $filas->usu_nombre; ?></td>
						<td scope="row"><?php echo $filas->usu_aplldo; ?> </td>
                        <td scope="row"><?php echo $filas->usu_passwd; ?></td>
                        <td scope="row"><?php echo $filas->usu_correo;?></td>
                        <td scope="row"><?php echo $filas->fic_codigo;?></td>
                        <td scope="row"><?php echo $filas->rol_nombre;?></td>
                        <td scope="row"><?php echo $filas->est_nombre;?></td>
						<td scope="row"><?php echo $filas->tip_idntfc;?></td>
						<td scope="row" hidden><?php echo $filas->usu_rolid;?></td>
                        
						<td scope="row"><button class="btn-rounded btn" data-toggle="modal" data-target="#modalusuario" data-dismiss="modal" onclick="EditarUsuario(<?php echo $grupal;?>)">Editar</button></td>
						<td scope="row"><button class="btn-rounded btn" onclick="BorrarUsuario(<?php echo $filas->usu_id; ?>);">Eliminar</button></td>
					</tr>

				<?php endforeach;?>
		</tbody>
	</table>
</div>