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
			<div id="tview">
					<?php  include('materialapoyoConfirm.php'); ?>
			</div>
	</div>
</div>
