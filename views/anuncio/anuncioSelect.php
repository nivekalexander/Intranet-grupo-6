<table>
		<!-- Cabecera de la Tabla 
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
		</thead>-->

		<!-- Cuerpo de la Tabla -->
		<tbody>
				<?php foreach ( $this->anuncio->Select() as $filas ): ?>

					 	<?php  $grupal = "'".$filas->anu_id."','".$filas->anu_titulo."','".$filas->anu_descrp."','".$filas->anu_feccrn."','".$filas->anu_fecfn."','".$filas->anu_ficid."','".$filas->anu_usuid."'"; ?>
						
						<!--
						<tr>
							
							
 							<td><?php //echo $filas->anu_titl;		?></td>
 							<td><?php //echo $filas->anu_descrp;	?></td>
 							<td><?php //echo $filas->anu_fechcr;	?></td>
 							<td><?php //echo $filas->anu_fechfn;	?></td>
 							<td><?php //echo $filas->anu_fichid; 	?></td>
 							<td><?php //echo $filas->anu_usuid;		?></td>

							<td> <button data-toggle="modal" data-target="#modalanuncios" data-dismiss="modal" onclick="EditarAnuncio(<?php //echo $grupal; ?>)"> Editar   </button>    </td>
							<td> <button onclick="BorrarAnuncio(<?php //echo $filas->anu_id;?>);"> Eliminar </button>    </td>
						</tr>-->


					<div class="d-flex justify-content-center">
						<div class="card bg-light mb-5 w-100 diseño-tarjeta">
							  <div class="card-header " >
							  
							
									<div class="float-left mr-5" >
										<a href="perfil.php?id=925763" name="imagenPost"><img src="https://www.flaticon.es/svg/static/icons/svg/599/599305.svg" width="40" height="40"></a>
									</div >
									<div class="float-left">
									<?php echo $filas->usu_nombre;?> <?php echo $filas->usu_aplldo;?><br>Fecha inicio : <?php echo $filas->anu_feccrn;?>
									</div>
							 </div>
							
  							<div class="card-body">
  							  <h5 class="card-title">Titulo : <?php echo $filas->anu_titulo; ?></h5>
								<p class="card-text"><?php echo $filas->anu_descrp;?></p>
								<div class="float-right"><button class="btn-rounded btn" data-toggle="modal" data-target="#modalanuncios" data-dismiss="modal" onclick="EditarAnuncio(<?php echo $grupal; ?>);"> Editar</button>
							    <button type="button" class="btn-rounded btn"onclick="BorrarAnuncio(<?php echo $filas->anu_id;?>);"> Eliminar </button></div>
  							</div>
						</div>
					</div>
					 
				<?php endforeach; ?>
		</tbody>
</table>




																		