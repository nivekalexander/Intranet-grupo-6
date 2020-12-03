 <script src="../assets/js/scripts.grupos.js"></script>
<div class="container">
	<div id="main">
			<div class="container espaciado">
    		    <h3 class="noti-tittle">Bienvenido <?php echo $_SESSION['SRol'] == 1 ? 'Administrador':'Instructor'; echo $Nombre=' '.$_SESSION['name'].' '.$_SESSION['last'];?></h3>
			</div>					
			
            <h3 class="noti-tittle">Grupos</h3><br>
			<div id="tview">
					<?php  include('gruposSelect.php'); ?>
            </div>		
	</div>
</div>