<table>
		<!-- Cabecera de la Tabla -->
		<thead>
			<tr>
				<th>Id</th>
				<th>Nombre Sede</th>
				<th>Ciudad</th>
				<th>Fecha de Creacion</th>
				<th>Fecha Actualizacion</th>
				<th>Editar</th>
				<th>Eliminar</th>
			</tr>
		</thead>  	

		<!-- Cuerpo de la Tabla -->
		<tbody>
				<?php foreach ( $this->sede->Select() as $filas ): ?>
					 
					 	<?php  $grupal = "'".$filas->sed_id ."','".$filas->sed_nombre."','".$filas->sed_ciuid."','".$filas->sed_fchcrt ."','".$filas->sed_fchupd."'"; ?>

						<tr>
							
 							<td><?php echo $filas->sed_id ;			?></td>
 							<td><?php echo $filas->sed_nombre;		?></td>
 							<td><?php echo $filas->sed_ciuid;		?></td>
 							<td><?php echo $filas->sed_fchcrt;		?></td>
 							<td><?php echo $filas->sed_fchupd;		?></td>
 							

							<td> 	<button onclick="EditarSede(<?php echo $grupal; ?>)">Editar</button>    </td>
							<td> 	<button onclick="BorrarSede(<?php echo $filas->sed_id ;?>);"> Eliminar </button></td>

						</tr>
					 
				<?php endforeach; ?>
		</tbody>
</table>