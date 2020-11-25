<table class="table table-striped">
		<!-- Cabecera de la Tabla -->
		<thead class="thead-dark">
			<tr>
				<th scope="col">Tipo Identificacion</th>
				<th scope="col">Editar</th>
				<th scope="col">Eliminar</th>
			</tr>
		</thead>

		<!-- Cuerpo de la Tabla -->
		<tbody>
				<?php foreach ( $this->tipoIdentificacion->Select() as $filas ): ?>
					 
					 	<?php  $grupal = "'".$filas->tip_id."','".$filas->tip_idntfc."'"; ?>

						<tr>
							
 							<td scope="row"><?php echo $filas->tip_idntfc;?></td>

							<td scope="row"><button class="btn-rounded btn" data-toggle="modal" data-target="#modaltipoidentificacion" data-dismiss="modal" onclick="EditarTipoidentificacion(<?php echo $grupal; ?>)">Editar</button></td>
							<td scope="row"><button class="btn-rounded btn" onclick="BorrarTipoidentificacion(<?php echo $filas->tip_id;?>);"> Eliminar </button>    </td>
						</tr>
					 
				<?php endforeach; ?>
		</tbody>
</table>
