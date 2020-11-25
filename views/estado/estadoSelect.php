<table class="table table-striped">
	<!-- Cabecera de la Tabla -->
	<thead class="thead-dark">
		<tr>
			
			<th  scope="col">Nombre Estado</th>
			<th  scope="col">Editar</th>
			<th  scope="col">Eliminar</th>

		</tr>
	</thead>

	<!-- Cuerpo de la Tabla -->
	<tbody>
		<?php foreach ( $this->estado->Select() as $filas ): ?>
				
			<?php  $grupal = "'".$filas->est_id."','".$filas->est_nombre."'"; ?>

			<tr>
				
				<td scope="row"><?php echo $filas->est_nombre;?></td>
				<td scope="row"><button onclick="EditarEstado(<?php echo $grupal; ?>)">Editar</button></td>
				<td scope="row"><button onclick="BorrarEstado(<?php echo $filas->est_id;?>);">Eliminar</button></td>

			</tr>
				
		<?php endforeach; ?>
	</tbody>
</table>
