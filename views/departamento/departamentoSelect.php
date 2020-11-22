<table>
		<!-- Cabecera de la Tabla -->
		<thead>
			<tr>
				<th>Id</th>
				<th>Nombre Departamento</th>
				<th>Pais</th>
				<th>Fecha de Creacion</th>
				<th>Fecha Actualizacion</th>
				<th>Editar</th>
				<th>Eliminar</th>
			</tr>
		</thead>  	

		<!-- Cuerpo de la Tabla -->
		<tbody>
				<?php foreach ( $this->departamento->Select() as $filas ): ?>
					 
					 	<?php  $grupal = "'".$filas->dep_id."','".$filas->dep_nombre."','".$filas->dep_paiid."','".$filas->dep_fchupd ."','".$filas->dep_fchcrt."'"; ?>

						<tr>
							
 							<td><?php echo $filas->dep_id;			?></td>
 							<td><?php echo $filas->dep_nombre;		?></td>
 							<td><?php echo $filas->dep_paiid;		?></td>
 							<td><?php echo $filas->dep_fchcrt;		?></td>
 							<td><?php echo $filas->dep_fchupd;		?></td>
 							

							<td> 	<button onclick="EditarDpto(<?php echo $grupal; ?>)">Editar</button>    </td>
							<td> 	<button onclick="BorrarDpto(<?php echo $filas->dep_id;?>);"> Eliminar </button></td>

						</tr>
					 
				<?php endforeach; ?>
		</tbody>
</table>