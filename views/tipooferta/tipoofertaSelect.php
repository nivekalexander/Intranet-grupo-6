<table class="table table-striped">
	<!-- Cabecera de la Tabla -->
	<thead class="thead-dark">
		<tr>
			
			<th  scope="col">Tipo Oferta</th>
			<th  scope="col">Editar</th>
			<th  scope="col">Eliminar</th>

		</tr>
	</thead>

	<!-- Cuerpo de la Tabla -->
	<tbody>
		<?php foreach ( $this->tipooferta->Select() as $filas ): ?>
				
			<?php  $grupal = "'".$filas->tof_id."','".$filas->tof_nombre."'"; ?>

			<tr>
				
				<td scope="row"><?php echo $filas->tof_nombre;?></td>
				<td scope="row"><button class="btn-rounded btn" data-toggle="modal" data-target="#modaltipooferta" data-dismiss="modal" onclick="EditarTipoOferta(<?php echo $grupal; ?>)">Editar</button></td>
				<td scope="row"><button class="btn-rounded btn" onclick="BorrarTipoOferta(<?php echo $filas->tof_id;?>);">Eliminar</button></td>

			</tr>
				
		<?php endforeach; ?>
	</tbody>
</table>