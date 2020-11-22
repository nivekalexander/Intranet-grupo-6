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
				<?php foreach ( $this->ciudad->Select() as $filas ): ?>
					 
					 	<?php  $grupal = "'".$filas->ciu_id ."','".$filas->ciu_nombre."','".$filas->ciu_depid."','".$filas->ciu_fchupd ."','".$filas->ciu_fchcrt."'"; ?>

						<tr>
							
 							<td><?php echo $filas->ciu_id ;			?></td>
 							<td><?php echo $filas->ciu_nombre;		?></td>
 							<td><?php echo $filas->ciu_depid;		?></td>
 							<td><?php echo $filas->ciu_fchcrt;		?></td>
 							<td><?php echo $filas->ciu_fchupd;		?></td>
 							

							<td> 	<button onclick="EditarCiudad(<?php echo $grupal; ?>)">Editar</button>    </td>
							<td> 	<button onclick="BorrarCiudad(<?php echo $filas->ciu_id ;?>);"> Eliminar </button></td>

						</tr>
					 
				<?php endforeach; ?>
		</tbody>
</table>