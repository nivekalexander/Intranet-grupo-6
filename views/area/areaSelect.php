<table>
		<!-- Cabecera de la Tabla -->
		<thead>
			<tr>
				<th>Id</th>
				<th>Nombre Area</th>
				<th>Sede</th>
				<th>Fecha de Creacion</th>
				<th>Fecha Actualizacion</th>
				<th>Editar</th>
				<th>Eliminar</th>
			</tr>
		</thead>  	

		<!-- Cuerpo de la Tabla -->
		<tbody>
				<?php foreach ( $this->area->Select() as $filas ): ?>
					 
					 	<?php  $grupal = "'".$filas->are_id ."','".$filas->are_nombre."','".$filas->are_sedid."','".$filas->are_fchupd ."','".$filas->are_fchcrt."'"; ?>

						<tr>
							
 							<td><?php echo $filas->are_id ;			?></td>
 							<td><?php echo $filas->are_nombre;		?></td>
 							<td><?php echo $filas->are_sedid;		?></td>
 							<td><?php echo $filas->are_fchupd;		?></td>
 							<td><?php echo $filas->are_fchcrt;		?></td>
 							

							<td> 	<button onclick="EditarArea(<?php echo $grupal; ?>)">Editar</button>    </td>
							<td> 	<button onclick="BorrarArea(<?php echo $filas->are_id ;?>);"> Eliminar </button></td>

						</tr>
					 
				<?php endforeach; ?>
		</tbody>
</table>