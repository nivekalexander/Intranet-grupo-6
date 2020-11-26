<div class="table-responsive">
	<table  class="table table-striped">
		<!-- Cabecera de la Tabla -->
		<thead class="thead-dark">
			<tr>
				<th scope="col" hidden>id 			</th>
				<th scope="col">Nombre Modalidad</th>
				<th scope="col">Editar		</th>
				<th scope="col">Eliminar	</th>
			</tr>
		</thead>

		<!-- Cuerpo de la Tabla -->
		<tbody>
				<?php foreach ($this->modalidad->Select() as $filas): ?>

					 	<?php $grupal = "'" . $filas->mod_id . "','" . $filas->mod_nombre . "'";?>

						<tr>
							<td scope="row" hidden><?php echo $filas->mod_id; ?> </td>
							<td scope="row"><?php echo $filas->mod_nombre; ?> </td>
							<td scope="row"><button class="btn-rounded btn" data-toggle="modal" data-target="#modalmodalidad" data-dismiss="modal" onclick="EditarModalidad(<?php echo $grupal;?>)">Editar</button></td>
							<td scope="row"><button class="btn-rounded btn" onclick="BorrarModalidad(<?php echo $filas->mod_id; ?>);">Eliminar</button></td>
						</tr>

				<?php endforeach;?>
		</tbody>
	</table>
</div>