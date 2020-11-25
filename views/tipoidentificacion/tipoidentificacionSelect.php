<table>
		<!-- Cabecera de la Tabla -->
		<thead>
			<tr>
				<th>tipo Identificacion </th>

			</tr>
		</thead>

		<!-- Cuerpo de la Tabla -->
		<tbody>
				<?php foreach ( $this->tipoidentificacion->Select() as $filas ): ?>
					 
					 	<?php  $grupal = "'".$filas->tip_id."','".$filas->tip_tipidn."'"; ?>

						<tr>
							
 							<td><?php echo $filas->tip_tipidn;?></td>

							<td> 	<button onclick="EditarTipoidentificacion(<?php echo $grupal; ?>)"> Editar   </button>    </td>
							<td> 	<button onclick="BorrarTipoidentificacion(<?php echo $filas->tip_id;?>);"> Eliminar </button>    </td>
						</tr>
					 
				<?php endforeach; ?>
		</tbody>
</table>
