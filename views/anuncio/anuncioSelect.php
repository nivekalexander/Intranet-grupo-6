<table>
		<!-- Cabecera de la Tabla -->
		<thead>
			<tr>
				<th>titulo			</th>
				<th>Descripcion 	</th>
				<th>Fecha Creacion 		</th>
				<th>Fecha Fin 	</th>
				<th>Ficha id	</th>
				<th>Usaurio id	</th>
				<th>Editar		</th>
				<th>Eliminar	</th>
			</tr>
		</thead>

		<!-- Cuerpo de la Tabla -->
		<tbody>
				<?php foreach ( $this->anuncio->Select() as $filas ): ?>

					 	<?php  $grupal = "'".$filas->anu_id."','".$filas->anu_titl."','".$filas->anu_descrp."','".$filas->anu_fechcr."','".$filas->anu_fechfn."','".$filas->anu_fichid."','".$filas->anu_usuid."'"; ?>

						<tr>
							
							
 							<td><?php echo $filas->anu_titl;			?></td>
 							<td><?php echo $filas->anu_descrp;		    ?></td>
 							<td><?php echo $filas->anu_fechcr;			?></td>
 							<td><?php echo $filas->anu_fechfn;			?></td>
 							<td><?php echo $filas->anu_fichid; 			?></td>
 							<td><?php echo $filas->anu_usuid;			?></td>

							<td> 	<button onclick="EditarAnuncio(<?php echo $grupal; ?>)"> Editar   </button>    </td>
							<td> 	<button onclick="BorrarAnuncio(<?php echo $filas->anu_id;?>);"> Eliminar </button>    </td>
						</tr>
					 
				<?php endforeach; ?>
		</tbody>
</table>


																		