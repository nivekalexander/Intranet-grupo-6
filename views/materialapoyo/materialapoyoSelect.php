
<div >
<table class="table-responsive ">

	<tbody class="justify-content-center">
			<?php foreach ( $this->materialapoyo->Select( $idfase,$_SESSION['grupoficha']) as $filas ): 
				
				$grupal = "'".$filas->map_id."','".$filas->map_titulo."','".$filas->map_descrp."','".$filas->map_archurl."','".$filas->map_fasid."','".$filas->map_usunumdnt."','".$filas->map_icono."'";?>
						
						
				

				<div style="padding:0;" class="btn-group contenidomaterial">
					<button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						
					
						<!-- Dropdown menu links -->
 
						<div >

							<div >
								
								<input class="form-control rounded" type="text"  name="nombre" id="nombre" value="<?php echo $filas->usu_nombre;?> <?php echo $filas->usu_aplldo;?>" hidden>
								
								<?php $iconos= array("jpeg","pdf","docx","jpg","mp3","mp4","png","pptx","xlsx","zip","rar");
									if(in_array( $filas->map_icono , $iconos)){
								?>

										<img src="../assets/img/img-materialapoyo/<?php echo $filas->map_icono; ?>.svg" alt="" style="width: 70px ; height: 70px;">

									<?php }else {?>

										<img src="../assets/img/img-materialapoyo/unknown.svg" alt="" style="width: 70px ; height: 70px;">

									<?php }?>
						
								<br><input class="form-control rounded" type="text"  name="titulo" id="titulo" value="<?php echo $filas->map_titulo; ?>" hidden>
								
								<h5 class="card-title"><?php echo $filas->map_titulo; ?></h5>
								<p><?php echo $filas->map_fecpub;?></p>
								
								<input class="form-control rounded" type="text"  name="fecpub" id="fecpub" value="<?php echo $filas->map_fecpub;?>" hidden>
							</div>
							
							<input class="form-control rounded" type="text"  name="descrp" id="descrp" value="<?php echo $filas->map_descrp;?>" hidden>
							<input class="form-control rounded" type="text"  name="archurl" id="archurl" value="<?php echo $filas->map_archurl; ?>" hidden>
							
							
							
						
						</div>
					</button>
					<div class="dropdown-menu drop-opcionbtn">

					<?php if($_SESSION['SRol']!=3){?>

						<button type="button" class="  opcionbtn"  onclick="EditarMaterialApoyo(<?php echo $grupal; ?>);">Editar</button><br>
						<button type="button" class=" opcionbtn" onclick="BorrarMaterialApoyo('<?php echo $filas->map_id; ?>' , '<?php echo $filas->map_archurl; ?>' , '<?php echo $_SESSION['grupoficha']; ?>' , '<?php echo $idfase; ?>');">Eliminar</button><br>
					<?php }?>

						<button type="button" class=" opcionbtn"  onclick="javascript:window.open('<?php echo $filas->map_archurl; ?>', '_blank')" >Descargar</button><br>
						
					</div>
					
				</div>		
							
			<?php endforeach; ?>
	</tbody>
</table>
</div>