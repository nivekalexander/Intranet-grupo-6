<script src="../assets/js/scripts.anuncio.js"></script>
<div class="container">
	<div id="main">
			<div class="container espaciado">

			<?php if($_SESSION['SRol']!=3){?>

    		     <a class="btn-rounded btn float-right" data-toggle="modal" data-target="#modalanuncios">Crear anuncios</a>
			<?php }?>		    
				
				<h3 class="noti-tittle">Anuncios <?php echo $_SESSION['grupoficha']; ?></h3>
    		</div>
			<div id="forms">
					<?php  include('anuncioInsert.php'); ?>
			</div>	
			<div id="tview">
					<?php  include('anuncioSelect.php'); ?>
			</div>
	</div>
</div>
