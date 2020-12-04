<!-- Modal -->

<div class="modal fade" id="modalficha" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog" role="document">
	  <div class="modal-content">
			<div class="modal-header Color-Slidebar">
				<h5 class="modal-title dropdown-text-color" id="titleficha">Crear Nuevo Ficha</h5>
				<button type="button" class="close dropdown-text-color" data-dismiss="modal" aria-label="Close" onclick="CancelarFicha();">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body espaciado">	

				<form name="formulario" id="formulario" class="needs-validation" novalidate>
						
					<input type="text" name="fic_id" hidden>
					<div>
						<label for="fic_codigo" >Codigo</label>
						<input class="form-control rounded" type="number" name="fic_codigo" required>
						<div class="invalid-feedback">Ingrese un Codigo</div>
						<div class="valid-feedback">¡Valido!</div>
                    </div><br>
                    <div>
						<label for="fic_feccrn" >Fecha Creacion</label>
						<input class="form-control rounded" type="date" name="fic_feccrn" required>
						<div class="invalid-feedback">Ingrese una Fecha</div>
						<div class="valid-feedback">¡Valido!</div>
                    </div><br>
                    <div>
						<label for="fic_fecfn" >Fecha fin</label>
						<input class="form-control rounded" type="date" name="fic_fecfn" required>
						<div class="invalid-feedback">Ingrese una Fecha</div>
						<div class="valid-feedback">¡Valido!</div>
                    </div><br>
					<div>
                        <label for="fic_tijid">Tipo Jornada</label><br>
						<select class="form-control rounded" type="text" name="fic_tijid" id="fic_tijid" required>
                            <?php 
                            foreach ($this->tipojornada->Select() as $datos): 
                                      echo '<option value="'.$datos->tij_id.'">'.$datos->tij_nombre.'</option>';
                            endforeach;
                            ?>
                        </select><br>
					</div>
                    <div>
					<div>
                        <label for="fic_modid">Tipo Modalidad</label><br>
						<select class="form-control rounded" type="text" name="fic_modid" id="fic_modid" required>
                            <?php 
                            foreach ($this->tipomodalidad->Select() as $datos): 
                                      echo '<option value="'.$datos->mod_id.'">'.$datos->mod_nombre.'</option>';
                            endforeach;
                            ?>
                        </select><br>
					</div>
					<div>
                        <label for="fic_tofid">Tipo Oferta</label><br>
						<select class="form-control rounded" type="text" name="fic_tofid" id="fic_tofid" required>
                            <?php 
                            foreach ($this->tipooferta->Select() as $datos): 
                                      echo '<option value="'.$datos->tof_id.'">'.$datos->tof_nombre.'</option>';
                            endforeach;
                            ?>
                        </select><br>
					</div>
					<div>
                        <label for="fic_pfoid">Programa De Formacion</label><br>
						<select class="form-control rounded" type="text" name="fic_pfoid" id="fic_pfoid" required>
                            <?php 
                            foreach ($this->programaformacion->Select() as $datos): 
                                      echo '<option value="'.$datos->pfo_id.'">'.$datos->pfo_nompro.'</option>';
                            endforeach;
                            ?>
                        </select><br>
					</div>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary btn-gris" data-dismiss="modal" onclick="CancelarFicha();">Cancelar</button>
						<button type="button" class="btn-rounded btn" id="btnguardar">Crear</button>
					</div>

				</form>

				<script>


					(function() {
						'use strict';
						window.addEventListener('load', function() {
							// Fetch all the forms we want to apply custom Bootstrap validation styles to
							var forms = document.getElementsByClassName('needs-validation');
							// Loop over them and prevent submission
							var validation = Array.prototype.filter.call(forms, function(form) {
								document.getElementById("btnguardar").addEventListener('click', function(event) {    
								if (form.checkValidity() === true) {
									var nombreBoton = document.getElementById("btnguardar").innerHTML;
									if (nombreBoton == "Crear"){
										InsertarFicha();
										$('#modalficha').modal('hide');
									}
									if (nombreBoton == "Actualizar"){
										UpdateFicha();
										$('#modalficha').modal('hide');
									}
								}
								if (form.checkValidity() === false) {
									event.preventDefault();
									event.stopPropagation();
								}
								 form.classList.add('was-validated');
								}, false);
							});
						}, false);
					})();

				</script>

			</div>
		</div>   
	</div>
</div>
