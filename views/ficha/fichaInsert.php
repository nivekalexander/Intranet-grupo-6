<!-- Modal -->

<div class="modal fade" id="modalficha" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog" role="document">
	  <div class="modal-content">
			<div class="modal-header Color-Slidebar">
				<h5 class="modal-title dropdown-text-color" id="exampleModalLabel">Crear Nuevo Ficha</h5>
				<button type="button" class="close dropdown-text-color" data-dismiss="modal" aria-label="Close" onclick="CancelarFicha();">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body espaciado">	

				<form name="formficha" id="formficha" class="needs-validation" novalidate>
						
					<input type="text" name="fic_id" hidden>
					<div>
						<label for="fic_codigo" >Codigo</label>
						<input class="form-control rounded" type="text" name="fic_codigo" required>
						<div class="invalid-feedback">Campo Obligatorio</div>
						<div class="valid-feedback">¡Valido!</div>
                    </div>
                    <div>
						<label for="fic_feccrn" >Fecha Creacion</label>
						<input class="form-control rounded" type="date" name="fic_feccrn" required>
						<div class="invalid-feedback">Campo Obligatorio</div>
						<div class="valid-feedback">¡Valido!</div>
                    </div>
                    <div>
						<label for="fic_fecfn" >Fecha fin</label>
						<input class="form-control rounded" type="date" name="fic_fecfn" required>
						<div class="invalid-feedback">Campo Obligatorio</div>
						<div class="valid-feedback">¡Valido!</div>
                    </div>
                    <div>
						<label for="fic_tijid" >Tipo Jornada</label>
						<input class="form-control rounded" type="text" name="fic_tijid" required>
						<div class="invalid-feedback">Campo Obligatorio</div>
						<div class="valid-feedback">¡Valido!</div>
                    </div>
                    <div>
						<label for="fic_modid" >Tipo Modalidad</label>
						<input class="form-control rounded" type="text" name="fic_modid" required>
						<div class="invalid-feedback">Campo Obligatorio</div>
						<div class="valid-feedback">¡Valido!</div>
                    </div>
                    <div>
						<label for="fic_tofid" >Tipo Oferta</label>
						<input class="form-control rounded" type="text" name="fic_tofid" required>
						<div class="invalid-feedback">Campo Obligatorio</div>
						<div class="valid-feedback">¡Valido!</div>
                    </div>
                    <div>
						<label for="fic_pfoid" >Programa De Formacion </label>
						<input class="form-control rounded" type="text" name="fic_pfoid" required>
						<div class="invalid-feedback">Campo Obligatorio</div>
						<div class="valid-feedback">¡Valido!</div>
                    </div>

					
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary btn-gris" data-dismiss="modal" onclick="CancelarFicha();">Cancelar</button>
						<button type="submit" class="btn-rounded btn" id="btnguardar">Crear</button>
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
