<script src="../assets/js/scripts.anuncio.js"></script>

	<div class="container espaciado">
		<a class="btn-rounded btn float-right" data-toggle="modal" data-target="#modalanuncios">Crear anuncios</a>
		<h3 class="noti-tittle">Anuncios <?php echo $fichapuntero?></h3>
	</div>
	<div id="forms">
			<?php  include('anuncioInsert.php'); ?>
	</div>	
	<div id="tview">
			<?php  include('anuncioSelect.php'); ?>
	</div>

