 <script src="../assets/js/scripts.grupos.js"></script>
<div class="container">
	<div id="main">
			<div class="container espaciado">
    		    <h3 class="noti-tittle">Bienvenido <?php echo $_SESSION['SRol'] == 1 ? 'Administrador':'Instructor'; echo $Nombre=' '.$_SESSION['name'].' '.$_SESSION['last'];?></h3>
			
			
			

			</div>	
			<div class="justify-content-rigth">

				<h5 class="">Elija Un Programa De Formación:</h5>
				
				
 				
				<select id="materialapoyobuscar" class="float-left rounded ">

					<option >--Elija Un Programa De Formación--</option>
					<?php foreach($this->programaformacion->Select() as $datos):
					
					echo '<option value="'.$datos->pfo_id.'">'.$datos->pfo_nompro.'</option>';
					
					endforeach;?>

				</select>

				<button id="botonbuscargrupos" type="button" class=" btn-rounded btn " onclick="BuscarPrograma();">Buscar</button>
				

				

			</div>				
			
            <h3 class="noti-tittle">Grupos</h3><br>

			<div id="tview">
					<h5>Porfavor Elejir Un Programa</h5>
            </div>		
	</div>
</div>