<table>
		<!-- Cabecera de la Tabla -->
		<thead>
			<tr>
				<th>Id</th>
				<th>Numero de Telefono</th>
				<th>Editar	</th>
				<th>Eliminar	</th>
			</tr>
		</thead>

		<!-- Cuerpo de la Tabla -->
		<tbody>
				<?php foreach ( $this->telefono->Select() as $filas ): ?>
					 
					 	<?php  $grupal = "'".$filas->tel_id."','".$filas->tel_numero."'"; ?>

						<tr>
							
 							<td><?php echo $filas->tel_id;			?></td>
 							<td><?php echo $filas->tel_numero;		?></td>

							<td> 	<button onclick="EditarTelefono(<?php echo $grupal; ?>)"> Editar   </button>    </td>
							<td> 	<button onclick="BorrarTelefono(<?php echo $filas->tel_id;?>);"> Eliminar </button></td>

						</tr>
					 
				<?php endforeach; ?>
		</tbody>
</table>