<script>
$(document).ready(function() {
						    $('#tablaprogramaformacion').DataTable({
												dom: 'Bfrtip',
												buttons: ['copy', 'excel', 'pdf','csv'],
													"language": {
				               					 				"url": "../assets/datatables/Spanish.json"
				            									}
								});
						} );

</script>


<table id="tablaprogramaformacion" class="table table-striped">
		<!-- Cabecera de la Tabla -->
		<thead class="thead-dark">
			<tr>
				<th scope="col">Versión</th>
				<th scope="col">Duración</th>
				<th scope="col">Abreviatura</th>
                <th scope="col">Nombre</th>
                <th scope="col">Estado</th>
                <th scope="col">Tipo de Programa</th>
                <th scope="col"></th>
                <th scope="col"></th>
			</tr>
		</thead>

		<!-- Cuerpo de la Tabla -->
		<tbody>
				<?php foreach ( $this->programaformacion->Select() as $filas ): ?>
					 
					 	<?php  $grupal = "'".$filas->pfo_id."','".$filas->pfo_versn."','".$filas->pfo_duracn."','".$filas->pfo_abrvtr."','".$filas->pfo_nompro."','".$filas->est_nombre."','".$filas->tpr_nombre."'"; ?>

						<tr>

                            <td scope="row"><?php echo $filas->pfo_versn;?></td>
                            <td scope="row"><?php echo $filas->pfo_duracn;?></td>
                            <td scope="row"><?php echo $filas->pfo_abrvtr;?></td>
                            <td scope="row"><?php echo $filas->pfo_nompro;?></td>
                            <td scope="row"><?php echo $filas->est_nombre;?></td>
                            <td scope="row"><?php echo $filas->tpr_nombre;?></td>

							<td scope="row"><button class="btn-rounded btn" data-toggle="modal" data-target="#modalprogramaformacion" data-dismiss="modal" onclick="EditarProgramaFormacion(<?php echo $grupal; ?>)">Editar</button></td>
							<td scope="row"><button class="btn-rounded btn" onclick="BorrarProgramaFormacion(<?php echo $filas->pfo_id;?>);"> Eliminar </button>    </td>
						</tr>
					 
				<?php endforeach; ?>
		</tbody>
</table>