<table>
		<!-- Cabecera de la Tabla -->
		<thead>
			<tr>
				<th>Id</th>
				<th>Nombre de Pais</th>
				<th>Postal</th>
				<th>Fecha de Creacion</th>
				<th>Fecha Actualizacion</th>
				<th>Editar</th>
				<th>Eliminar</th>
			</tr>
		</thead>  	

		<!-- Cuerpo de la Tabla -->
		<tbody>
				<?php foreach ( $this->pais->Select() as $filas ): ?>
					 
					 	<?php  $grupal = "'".$filas->pai_id."','".$filas->pai_nombre."','".$filas->pai_postal."','".$filas->pai_fchcrt."','".$filas->pai_fchupd."'"; ?>

						<tr>
							
 							<td><?php echo $filas->pai_id;			?></td>
 							<td><?php echo $filas->pai_nombre;		?></td>
 							<td><?php echo $filas->pai_postal;		?></td>
 							<td><?php echo $filas->pai_fchcrt;		?></td>
 							<td><?php echo $filas->pai_fchupd;		?></td>

							<td> 	<button onclick="EditarPais(<?php echo $grupal; ?>)"> Editar   </button>    </td>
							<td> 	<button onclick="BorrarPais(<?php echo $filas->pai_id;?>);"> Eliminar </button></td>

						</tr>
					 
				<?php endforeach; ?>
		</tbody>
</table>