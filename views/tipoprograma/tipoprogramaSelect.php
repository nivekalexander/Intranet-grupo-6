<div class="table-responsive">
	<table class="table table-striped">
		<!-- Cabecera de la Tabla -->
		<thead class="thead-dark">
			<tr>
				<th scope="col" hidden>id 			</th>
				<th scope="col">Nombre Programa formacion</th>
				<th scope="col">Editar		</th>
				<th scope="col">Eliminar	</th>
			</tr>
		</thead>

		<!-- Cuerpo de la Tabla -->
		<tbody>
				<?php foreach ($this->tipoprograma->Select() as $filas): ?>

					 	<?php $grupal = "'" . $filas->tpr_id . "','" . $filas->tpr_nombre . "'";?>

						<tr>
							<td scope="row" hidden><?php echo $filas->tpr_id; ?> </td>
							<td scope="row"><?php echo $filas->tpr_nombre; ?> </td>
							<td scope="row"><button class="btn-rounded btn" data-toggle="modal" data-target="#modaltipoprograma" data-dismiss="modal" onclick="EditarTipoPrograma(<?php echo $grupal;?>)">Editar</button></td>
							<td scope="row"><button class="btn-rounded btn" onclick="BorrarTipoPrograma(<?php echo $filas->tpr_id; ?>);">Eliminar</button></td>
						</tr>

				<?php endforeach;?>
		</tbody>
	</table>
</div>