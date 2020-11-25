<table  class="table table-striped">
		<!-- Cabecera de la Tabla -->
		<thead class="thead-dark">
			<tr>
				<th scope="col" hidden>id 			</th>
				<th scope="col">Nombre Tipo Jornada</th>
				<th scope="col">Editar		</th>
				<th scope="col">Eliminar	</th>
			</tr>
		</thead>

		<!-- Cuerpo de la Tabla -->
		<tbody>
				<?php foreach ($this->tipojornada->Select() as $filas): ?>

					 	<?php $grupal = "'" . $filas->tij_id . "','" . $filas->tij_nombre . "'";?>

						<tr>
							<td scope="row" hidden><?php echo $filas->tij_id; ?> </td>
							<td scope="row"><?php echo $filas->tij_nombre; ?> </td>
							<td scope="row"><button class="btn-rounded btn" data-toggle="modal" data-target="#modaltipojornada" data-dismiss="modal" onclick="EditarTipoJornada(<?php echo $grupal;?>)">Editar</button></td>
							<td scope="row"><button class="btn-rounded btn" onclick="BorrarTipoJornada(<?php echo $filas->tij_id; ?>);">Eliminar</button></td>
						</tr>

				<?php endforeach;?>
		</tbody>
</table>