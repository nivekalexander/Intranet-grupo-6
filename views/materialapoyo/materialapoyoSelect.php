<div >
<table class="table-responsive ">

	<tbody class="justify-content-center">
			<?php foreach ( $this->materialapoyo->Select( $idfase,$fichapuntero) as $filas ): ?>

					<?php  $grupal = "'".$filas->map_id."','".$filas->map_titulo."','".$filas->map_fecpub."','".$filas->map_descrp."','"."','".$filas->map_archurl."','".$filas->map_fasid."'"; ?>
						
					
				

				<div style="padding:0;" class="btn-group contenidomaterial">
					<button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						
					
						<!-- Dropdown menu links -->
 
						<div >

							
							
							

								<div >
									
									<p hidden>
									<?php echo $filas->usu_nombre;?> <?php echo $filas->usu_aplldo;?>
									</p>
									<img src="../assets/img/img-materialapoyo/icon1.png" alt="">
									<h5 class="card-title">Titulo : <?php echo $filas->map_titulo; ?></h5>
									<p>Fecha Publicacion : <?php echo $filas->map_fecpub;?></p>
								</div>
								
								<p class="card-text" hidden><?php echo $filas->map_descrp;?></p>
								<h5 class="card-title" hidden>Material : <?php echo $filas->map_archurl; ?></h5>
								<input type="file" name="archivo" hidden>
								
							
						</div>
					</button>
					<div class="dropdown-menu drop-opcionbtn">
						<button type="button" class="  opcionbtn"  onclick="EditarMaterialApoyo(<?php echo $grupal; ?>);">Editar</button><br>
						<button type="button" class=" opcionbtn" onclick="BorrarMaterialApoyo(<?php echo $filas->map_id;?>);">Eliminar</button><br>
						<button type="button" class=" opcionbtn" onclick="EditarMaterialApoyo(<?php echo $filas->map_id;?>);">Descargar</button><br>
					</div>
					
				</div>		
							
			<?php endforeach; ?>
	</tbody>
</table>
</div>