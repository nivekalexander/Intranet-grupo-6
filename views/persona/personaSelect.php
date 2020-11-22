<table>
		<!-- Cabecera de la Tabla -->
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Direccion</th>
				<th>Correo</th>
				<th>Tipo de identificacion</th>
				<th>Numero telefonico</th>
				<th>Editar</th>
				<th>Eliminar</th>
			</tr>
		</thead>

		<!-- Cuerpo de la Tabla -->
		<tbody>
				<?php foreach ( $this->persona->Select() as $filas ): ?>
					 
					 	<?php  $grupal = "'".$filas->per_id."','".$filas->per_nombre."','".$filas->per_aplldo."','".$filas->per_dirccn."','".$filas->per_correo."','".$filas->per_tipid."','".$filas->per_telid."'"; ?>

						<tr>
							
 							<td><?php echo $filas->per_nombre;			?></td>
 							<td><?php echo $filas->per_aplldo;			?></td>
 							<td><?php echo $filas->per_dirccn;			?></td>
 							<td><?php echo $filas->per_correo;			?></td>
 							<td><?php if($filas->per_tipid == 1){echo "C.C";}elseif($filas->per_tipid == 2){ echo "C.E";}else{ echo "T.I";}?></td>
 							<td><?php echo $filas->per_telid; 			?></td>

							<td> 	<button onclick="EditarPersona(<?php echo $grupal; ?>)"> 		Editar   	</button>    </td>
							<td> 	<button onclick="BorrarPersona(<?php echo $filas->per_id;?>);"> Eliminar 	</button>    </td>
						</tr>
					 
				<?php endforeach; ?>
		</tbody>
</table>




																		