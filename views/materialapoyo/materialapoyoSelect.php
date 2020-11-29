<table>

	<tbody>
			<?php foreach ( $this->materialapoyo->Select($fichapuntero) as $filas ): ?>

					 	<?php  $grupal = "'".$filas->map_id."','".$filas->map_titulo."','".$filas->map_fecpub."','".$filas->map_descrp."','"."','".$filas->map_archurl."','".$filas->map_fasid."'"; ?>
						
					
				

				<div class="d-flex justify-content-center">
					<div class="card bg-light mb-5 w-100 diseño-tarjeta">

						<div class="card-header " >
							<div class="float-left mr-5" >
							  <a href="perfil.php?id=925763" name="imagenPost"><img src="https://www.flaticon.es/svg/static/icons/svg/599/599305.svg" width="40" height="40"></a>
							</div >
							<div class="float-left">
							  <?php echo $filas->usu_nombre;?> <?php echo $filas->usu_aplldo;?><br>Fecha Publicacion : <?php echo $filas->map_fecpub;?>
							</div>
						</div>
						
						<div class="card-body">
							<h5 class="card-title">Titulo : <?php echo $filas->map_titulo; ?></h5>
							<p class="card-text"><?php echo $filas->map_descrp;?></p>
                            <h5 class="card-title">Material : <?php echo $filas->map_archurl; ?></h5>
                            <input type="file" name="archivo" hidden>
							<div class="float-right"><button class="btn-rounded btn" data-toggle="modal" data-target="#modalmaterialapoyo" data-dismiss="modal" onclick="EditarMaterialApoyo(<?php echo $grupal; ?>);">Editar</button>
							<button type="button" class="btn-rounded btn" onclick="BorrarMaterialApoyo(<?php echo $filas->map_id;?>);"> Eliminar </button></div>
						</div>
					</div>
				</div>
					
			<?php endforeach; ?>
	</tbody>
</table>