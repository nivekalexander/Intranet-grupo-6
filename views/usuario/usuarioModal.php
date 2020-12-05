<!-- Modal 2 fichas 1-->
<div class="modal fade" id="modalfichasAll" tabindex="-1" aria-labelledby="Label" aria-hidden="true">
  	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalfichaLabel1">Agregar Ficha</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="AgregarCancelar()">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<div class="container"> 
					<form  name="modalfichasAll" id="modalfichasAll" >						
						<div class="form-group row">
							<label for="usuariofichaagregar">Identificacion De Usuario</label>
							<input class="form-control rounded" type="text" id="usuariofichaagregar" readonly>
						</div>

						<div class="form-group row">
							<label for="ficha">Ficha</label>
							<select class="form-control rounded" name="fichaagregar" id="fichaagregar" required>
								<?php 
									$fichasNoUsu = $this->usuario->SelectFichaNoUsu($_POST['idss']);
									if($fichasNoUsu){
										foreach ($fichasNoUsu as $datos): 	
											echo '<option value="'.$datos->fic_codigo.'">'.$datos->fic_codigo.'</option>';
										endforeach;
									}else{
										echo '<option value="0">Sin fichas disponibles</option>';
									}
								?>
							</select>						
						</div>

						<div class="modal-footer">
							<button type="button" class="btn btn-gris" data-dismiss="modal"onclick="AgregarCancelar()" >Cancelar</button>
							<button type="button" id="btnguardar2" class="btn btn-rounded" data-dismiss="modal" onclick="AgregarFichaConfirmar()">Agregar Ficha</button>
						</div>
					</form>	
				</div>
			</div>
		</div>
  	</div>
</div>

<!-- Modal 3 fichas 2-->
<div class="modal fade" id="modalfichasUSU" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="modalfichasUSULabel" aria-hidden="true">
  	<div class="modal-dialog">
    	<div class="modal-content">
      		<div class="modal-header">
				<h5 class="modal-title" id="modalfichasUSULabel">Eliminar Ficha</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="EliminarCancelar()">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			
			<div class="modal-body">
				<div class="container">
					<form  >
						<div class="form-group row">
							<label for="ficha">Identificacion De Usuario</label>
							<input class="form-control rounded" type="number" id="usuariofichaeliminar" readonly>
						</div>
						
						<div class="form-group row">
							<label for="ficha">Seleccione La Ficha A Eliminar</label>
							<select class="form-control rounded" name="fichaeliminar" id="fichaeliminar" required>
								<?php 
									$fichasUsu = $this->usuario->SelectFichaUsu($_POST['idss']);
									if($fichasUsu){
										foreach ($fichasUsu as $datos): 	
											echo '<option value="'.$datos->usf_id.'">'.$datos->usf_ficcodigo.'</option>';
										endforeach;
									}else{
										echo '<option value="0">Sin fichas asignadas</option>';
									}
								?>
							</select>
						</div>
						
						<div class="modal-footer">

							<button type="button" class="btn btn-secondary btn-gris" data-dismiss="modal" onclick="EliminarCancelar()">Cancelar</button>
							<button type="button" id="btnguardar3" class="btn btn-rounded" data-dismiss="modal" onclick="EliminarFichaConfirmar()">Eliminar Ficha</button>

						</div>
					</form>
				</div>	
			</div>
		</div>
  </div>
</div>
