<table>
		<!-- Cabecera de la Tabla -->
		<thead>
			<tr>
				<th>id 			</th>
				<th>Nombre Programa formacion</th>
				<th>Editar		</th>
				<th>Eliminar	</th>
			</tr>
		</thead>

		<!-- Cuerpo de la Tabla -->
		<tbody>
				<?php foreach ($this->programa->Select() as $filas): ?>

					 	<?php $grupal = "'" . $filas->Pro_IdProg . "','" . $filas->Pro_NombreProg . "'";?>

						<tr>
							<td>	<?php echo $filas->Pro_IdProg; ?> </td>
							<td>	<?php echo $filas->Pro_NombreProg; ?> </td>
							<td> 	<button onclick="Editar(<?php echo $grupal; ?>)"> Editar   </button>    </td>
							<td> 	<button onclick="Borrar(<?php echo $filas->Pro_IdProg; ?>);"> Eliminar </button>    </td>
						</tr>

				<?php endforeach;?>
		</tbody>
</table>