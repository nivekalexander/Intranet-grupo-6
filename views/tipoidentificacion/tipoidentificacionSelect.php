<table>
		<!-- Cabecera de la Tabla -->
		<thead>
			<tr>
				<th>tipo Identificacion </th>

			</tr>
		</thead>

		<!-- Cuerpo de la Tabla -->
		<tbody>
				<?php foreach ( $this->tipoIdentificacion->Select() as $filas ): ?>
					 
					 	<?php  $grupal = "'".$filas->tip_id."','".$filas->tip_idntfc."'"; ?>

						<tr>
							
 							<td><?php echo $filas->tip_idntfc;?></td>

							<td> 	<button onclick="EditarTipoidentificacion(<?php echo $grupal; ?>)"> Editar   </button>    </td>
							<td> 	<button onclick="BorrarTipoidentificacion(<?php echo $filas->tip_id;?>);"> Eliminar </button>    </td>
						</tr>
					 
				<?php endforeach; ?>
		</tbody>
</table>
