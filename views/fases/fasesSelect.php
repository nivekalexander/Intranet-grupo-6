<table  class="table table-striped">
		<!-- Cabecera de la Tabla -->
		<thead class="thead-dark">
			<tr>
				<th scope="col" hidden>id 			</th>
				<th scope="col">Nombre Fase</th>
				<th scope="col">Editar		</th>
				<th scope="col">Eliminar	</th>
			</tr>
		</thead>

		<!-- Cuerpo de la Tabla -->
		<tbody>
				<?php foreach ($this->fases->Select() as $filas): ?>

					 	<?php $grupal = "'" . $filas->fas_id . "','" . $filas->fas_nombre . "'";?>

						<tr>
							<td scope="row" hidden><?php echo $filas->fas_id; ?> </td>
							<td scope="row"><?php echo $filas->fas_nombre; ?> </td>
							<td scope="row"><button class="btn-rounded btn" data-toggle="modal" data-target="#modalfases" data-dismiss="modal" onclick="EditarFases(<?php echo $grupal;?>)">Editar</button></td>
							<td scope="row"><button class="btn-rounded btn" onclick="BorrarFases(<?php echo $filas->fas_id; ?>);">Eliminar</button></td>
						</tr>

				<?php endforeach;?>
		</tbody>
</table>