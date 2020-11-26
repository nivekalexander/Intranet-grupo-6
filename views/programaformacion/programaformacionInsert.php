<div class="modal fade" id="modalprogramaformacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog" role="document">
	  <div class="modal-content">
			<div class="modal-header Color-Slidebar">
				<h5 class="modal-title dropdown-text-color" id="exampleModalLabel">Crear Nuevo Programa de formación</h5>
				<button type="button" class="close dropdown-text-color" data-dismiss="modal" aria-label="Close" onclick="CancelarProgramaFormacion();">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body espaciado">	

				<form name="formprogramaformacion" id="formprogramaformacion" class="needs-validation" novalidate>
				
						<input type="text" name="id" hidden>

					<div>
						<label for="version">Versión</label><br>
						<input class="form-control rounded" type="text" name="version" required>
						<div class="invalid-feedback">Campo Obligatorio</div>
						<div class="valid-feedback">¡Valido!</div><br>
					</div>

                    <div>
						<label for="duracion">Duración</label><br>
						<input class="form-control rounded" type="text" name="duracion" required>
						<div class="invalid-feedback">Campo Obligatorio</div>
						<div class="valid-feedback">¡Valido!</div><br>
					</div>

                    <div>
						<label for="abreviacion">Abreviatura</label><br>
						<input class="form-control rounded" type="text" name="abreviacion" required>
						<div class="invalid-feedback">Campo Obligatorio</div>
						<div class="valid-feedback">¡Valido!</div><br>
					</div>

                    <div>
						<label for="nombre">nombre del programa</label><br>
						<input class="form-control rounded" type="text" name="nombre" required>
						<div class="invalid-feedback">Campo Obligatorio</div>
						<div class="valid-feedback">¡Valido!</div><br>
					</div>

                    <div>
                        <label for="estado">Estado</label><br>
						<select class="form-control rounded" type="text" name="estado" id="estado" required>
                            <?php 
                            foreach ($this->estado->Select() as $datos): 
                                      echo '<option value="'.$datos->est_id.'">'.$datos->est_nombre.'</option>';
                            endforeach;
                            ?>
                        </select><br>
					</div>

                    
                    <div>
                        <label for="tipoprograma">Tipo de programa</label><br>
						<select class="form-control rounded" type="text" name="tipoprograma" id="tipPrograma" required>
                            <?php 
                            foreach ($this->tipoprograma->Select() as $datos): 
                                      echo '<option value="'.$datos->tpr_id.'">'.$datos->tpr_nombre.'</option>';
                            endforeach;
                            ?>
                        </select><br>
					</div>

				<div class="modal-footer">
						<button type="button" class="btn btn-secondary btn-gris" data-dismiss="modal" onclick="CancelarProgramaFormacion();">Cancelar</button>
						<button type="submit" id="btnproforma" class="btn-rounded btn">Crear</button>
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
								form.addEventListener('submit', function(event) {
								if (form.checkValidity() === true) {
									var nombreBoton = document.getElementById("btnproforma").innerHTML;
									if (nombreBoton == "Crear"){
										InsertProgramaFormacion();
										$('#modalprogramaformacion').modal('hide');
									}
									if (nombreBoton == "Actualizar"){
										UpdateProgramaFormacion();
										$('#modalprogramaformacion').modal('hide');
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