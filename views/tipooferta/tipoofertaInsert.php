<!-- Modal -->

<div class="modal fade" id="modaltipooferta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog" role="document">
	  <div class="modal-content">
			<div class="modal-header Color-Slidebar">
				<h5 class="modal-title dropdown-text-color" id="titletipoferta">Crear tipo de oferta</h5>
				<button type="button" class="close dropdown-text-color" data-dismiss="modal" aria-label="Close" onclick="CancelarTipoOferta();">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body espaciado">		
			
					<form name="formtipooferta" id="formtipooferta" class="needs-validation" novalidate>

            				<input type="text" name="id" hidden>

						<div>
            				<label for="nombre">Nombre De Tipo De Oferta</label><br>
            				<input class="form-control rounded" type="text" name="nombre" required>
							<div class="invalid-feedback">Campo Obligatorio</div>
							<div class="valid-feedback">¡Valido!</div>
					    </div>

						<div class="modal-footer">
								<button type="button" class="btn btn-secondary btn-gris" data-dismiss="modal" onclick="CancelarTipoOferta();">Cerrar</button>
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
											InsertarTipoOferta();
											$('#modaltipooferta').modal('hide');
										}
										if (nombreBoton == "Actualizar"){
											UpdateTipoOferta();
											$('#modaltipooferta').modal('hide');
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
