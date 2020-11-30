<script src="../assets/js/scripts.materialapoyo.js"></script>
<div class="container">
	<div id="main">
		<div class="container espaciado">
				<a class="btn-rounded btn float-right" data-toggle="modal" data-target="#modalmaterialapoyo">Crear Material De Apoyo</a>
			<h3 class="noti-tittle">Material De Apoyo <?php echo $fichacodigo?></h3>
		</div>
		<div id="forms">
				<?php  include('materialapoyoInsert.php'); ?>
		</div>
		<div id="fasescontainer">
			<div id="drow-fases" class="btn-group dropdown">
				<button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Fases
				</button>
				<div id="drow-fases-nombres" class="dropdown-menu">

					<input clss="dropdown-item" type="text" id="fichapuntero" value="<?php echo $_REQUEST['fcpt'];?>" hidden>
					<?php foreach ( $this->fases->Select() as $filas ): ?>
						
						<input id="drow-fases-nombres-botones" class="dropdown-item btn-rounded btn float-right" type="button" value="<?php echo $filas->fas_nombre?>" onclick="FasesMaterialApoyo(<?php echo $filas->fas_id;?>)">
						<br>
					<?php endforeach; ?>

				</div>
			</div>	

			<div class="materialview" id="tview">
					
			</div>
		</div>
	</div>
</div>
