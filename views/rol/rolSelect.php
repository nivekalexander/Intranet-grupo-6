<div class="table-responsive">
	<table  class="table table-striped">
		<!-- Cabecera de la Tabla --><?php echo $_SESSION['grupoficha'];?>
		<thead class="thead-dark">
			<tr>
				<th scope="col" hidden>id 			</th>
				<th scope="col">Nombre Rol</th>
				<th scope="col">Editar		</th>
				<th scope="col">Eliminar	</th>
			</tr>
		</thead>

		<!-- Cuerpo de la Tabla -->
		<tbody>
				<?php foreach ($this->rol->Select() as $filas): ?>

					 	<?php $grupal = "'" . $filas->rol_id . "','" . $filas->rol_nombre . "'";?>

						<tr>
							<td scope="row" hidden><?php echo $filas->rol_id; ?> </td>
							<td scope="row"><?php echo $filas->rol_nombre; ?> </td>
							<td scope="row"><button class="btn-rounded btn" data-toggle="modal" data-target="#modalrol" data-dismiss="modal" onclick="EditarRol(<?php echo $grupal;?>)">Editar</button></td>
							<td scope="row"><button class="btn-rounded btn" onclick="BorrarRol(<?php echo $filas->rol_id; ?>);">Eliminar</button></td>
						</tr>

				<?php endforeach;?>
		</tbody>
	</table>
</div>