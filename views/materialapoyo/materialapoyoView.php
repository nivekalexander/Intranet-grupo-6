<script src="../assets/js/scripts.materialapoyo.js"></script>
<div class="container">
	<div id="main">


		<div class="container espaciado">
				<a class="btn-rounded btn float-right" data-toggle="modal" data-target="#modalmaterialapoyo">Crear Material De Apoyo</a>
			<h3 class="noti-tittle">Material De Apoyo <?php echo $_SESSION['grupoficha']?></h3>
		</div>
		<div id="forms">
				<?php  include('materialapoyoInsert.php'); ?>
		</div>
		

		<div id="fasescontainer table-responsive ">
			<div id="drow-fases" class="btn-group dropdown ">

				<button id="botonfase" type="button" data-toggle="collapse" data-target="#drow-fases-nombres" aria-expanded="false" aria-controls="drow-fases-nombres">
					Seleccionar Fases 
				</button>

				
				<div id="drow-fases-nombres" class="collapse btn-group table-responsive " role="group" aria-label="Basic example">
					
						<input class="dropdown-item" type="text" id="fichapuntero" value="<?php echo $_REQUEST['fcpt'];?>" hidden>
						
						<?php foreach ( $this->fases->Select() as $filas ): ?>
							
							<button type="button" class="btn drow-fases-nombres-boton" onclick="FasesMaterialApoyo(<?php echo $filas->fas_id;?>)"><?php echo $filas->fas_nombre?></button>
							<br>
						<?php endforeach; ?>

					
				</div>
			</div>

			
			
		</div>

		<div class="materialview" id="tview">
					
		</div>

	</div>
</div>
