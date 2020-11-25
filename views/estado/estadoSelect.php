<table>
		<!-- Cabecera de la Tabla -->
		<thead>
			<tr>
				<th>Id</th>
				<th>Nombre Estado		</th>
				<th>Editar	</th>
				<th>Eliminar	</th>
			</tr>
		</thead>

		<!-- Cuerpo de la Tabla -->
		<tbody>
				<?php foreach ( $this->estado->Select() as $filas ): ?>
					 
					 	<?php  $grupal = "'".$filas->est_id."','".$filas->est_nombre."'"; ?>

						<tr>
							
 							<td><?php echo $filas->est_id;			?></td>
 							<td><?php echo $filas->est_nombre;		?></td>

							<td> 	<button onclick="EditarEstado(<?php echo $grupal; ?>)"> Editar   </button>    </td>
							<td> 	<button onclick="BorrarEstado(<?php echo $filas->est_id;?>);"> Eliminar </button></td>

						</tr>
					 
				<?php endforeach; ?>
		</tbody>
</table>