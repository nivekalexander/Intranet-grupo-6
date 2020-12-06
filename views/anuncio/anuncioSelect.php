<?php if($_SESSION['SRol']!=2){ ?>	

	<table>
		<tbody>		
					<?php 
					
					$cont  = 0;
					$mayor = 0;

					foreach ( $this->anuncio->Select($_SESSION['grupoficha']) as $filas ):

							if($cont == 0){
								$mayor = $filas->anu_id;
							}

							if($filas->anu_id>$mayor){
								$mayor = $filas->anu_id;
							}

							$cont = $cont +1 ;

					endforeach; 

					$anuncios = $this->anuncio->Select($_SESSION['grupoficha']);
					if($anuncios){

				    foreach ( $anuncios  as $filas ): ?>

							<?php  $grupal = "'".$filas->anu_id."','".$filas->anu_titulo."','".preg_replace("/[\r\n|\n|\r]+/", " ", $filas->anu_descrp)."','".$filas->anu_fecfn."','".$filas->anu_ficcodigo."'"; ?>
							

					<div class="d-flex justify-content-center">
						<div class="card bg-light mb-5 w-100 diseño-tarjeta">

							<div class="card-header " >
								<div class="float-left mr-5" >
									<a name="imagenPost"><img src="../assets/img/img-perfil/user.svg" width="40" height="40"></a>
								</div >
								<div class="float-left">
								<?php echo $filas->usu_nombre;?> <?php echo $filas->usu_aplldo." "; if($filas->anu_id==$mayor){ echo '<span class="badge badge-pill badge-info">Nuevo</span>';} ?> <br>Fecha inicio : <?php echo $filas->anu_feccrn;?>
								</div>
							</div>
							
							<div class="card-body">
								<h5 class="card-title">Titulo : <?php echo $filas->anu_titulo; ?></h5>
								<p class="card-text"><?php echo nl2br($filas->anu_descrp);?></p>
								<div class="float-right">
								
									<?php if($_SESSION['SRol']!=3){?>

										<button class="btn-rounded btn" data-toggle="modal" data-target="#modalanuncios" data-dismiss="modal" onclick="EditarAnuncio(<?php echo $grupal; ?>);">Editar</button>
										<button type="button" class="btn-rounded btn" onclick="BorrarAnuncio(<?php echo $filas->anu_id;?>);"> Eliminar </button>
									
									<?php }?>

								</div>	

							</div>
						</div>
					</div>
						
				<?php endforeach; 
				}else{?>

					<br>
					<div class="alert alert-light" role="alert">
						<h4 class="alert-heading">Sin anuncios</h4>            
						<hr>
						<?php if($_SESSION['SRol']!=3){?>
							<p class="mb-0">Da click a "Crear anuncio" para mostrar un nuevo anuncio</p>
						<?php }?>
					</div>

				<?php } ?>
		</tbody>
	</table>

	<?php 
	}else{ 	
	?>
	<table>
		<tbody>		
					<?php 
					
					$cont  = 0;
					$mayor = 0;

					foreach ( $this->anuncio->Select($_SESSION['grupoficha']) as $filas ):

							if($cont == 0){
								$mayor = $filas->anu_id;
							}

							if($filas->anu_id>$mayor){
								$mayor = $filas->anu_id;
							}

							$cont = $cont +1 ;

					endforeach; 

				$anuncios = $this->anuncio->SelectInstructor($_SESSION['grupoficha'],$_SESSION['SIdu']);
				if($anuncios){

				    foreach ( $anuncios as $filas ): ?>

							<?php  $grupal = "'".$filas->anu_id."','".$filas->anu_titulo."','".preg_replace("/[\r\n|\n|\r]+/", " ", $filas->anu_descrp)."','".$filas->anu_fecfn."','".$filas->anu_ficcodigo."'"; ?>
							

					<div class="d-flex justify-content-center">
						<div class="card bg-light mb-5 w-100 diseño-tarjeta">

							<div class="card-header " >
								<div class="float-left mr-5" >
								<a name="imagenPost"><img src="../assets/img/img-perfil/user.svg" width="40" height="40"></a>
								</div >
								<div class="float-left">
								<?php echo $filas->usu_nombre;?> <?php echo $filas->usu_aplldo." "; if($filas->anu_id==$mayor){ echo '<span class="badge badge-pill badge-info">Nuevo</span>';} ?> <br>Fecha inicio : <?php echo $filas->anu_feccrn;?>
								</div>
							</div>
							
							<div class="card-body">
								<h5 class="card-title">Titulo : <?php echo $filas->anu_titulo; ?></h5>
								<p class="card-text"><?php echo nl2br($filas->anu_descrp);?></p>
								<div class="float-right">
								
									

										<button class="btn-rounded btn" data-toggle="modal" data-target="#modalanuncios" data-dismiss="modal" onclick="EditarAnuncio(<?php echo $grupal; ?>);">Editar</button>
										<button type="button" class="btn-rounded btn" onclick="BorrarAnuncio(<?php echo $filas->anu_id;?>);"> Eliminar </button>									
									

								</div>	

							</div>
						</div>
					</div>
						
				<?php endforeach; 
				}else{ ?>
					<br>
					<div class="alert alert-light" role="alert">
						<h4 class="alert-heading">Sin anuncios</h4>            
						<hr>
						<p class="mb-0">Da click a "Crear anuncio" para mostrar un nuevo anuncio</p>
					</div>
				<?php } ?>
		</tbody>
	</table>
<?php }?>



																			