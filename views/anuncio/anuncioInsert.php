<!-- Modal -->

<div class="modal fade" id="modalanuncios" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog" role="document">
	  <div class="modal-content">
			<div class="modal-header Color-Slidebar">
				<h5 class="modal-title dropdown-text-color" id="titlemodalanuncios">Crear anuncio</h5>
				<button type="button" class="close dropdown-text-color" data-dismiss="modal" aria-label="Close" onclick="CancelarAnuncio();">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body espaciado">

				<form name="formulario" id="formanuncio" class="needs-validation" novalidate>

					<input type="text" name="id" hidden>
				<div>
					<label for="titulo">Titulo</label><br>
					<input class="form-control rounded" type="text" name="titulo" id="titulo" required>
					<div class="invalid-feedback">Complete el campo.</div><br>
			    </div>

				<div>
					<label for="descrp">Descripcion</label><br>
					<textarea class="form-control rounded" name="descrp" id="descrp" rows="3" required></textarea>
					<div class="invalid-feedback">Complete el campo.</div><br>
				</div>

				<div>
					<label for="fchfin">Fecha Fin</label><br>
					<input class="form-control rounded" type="date" name="fchfin" id="fchfin" required>
					<div class="invalid-feedback">Complete el campo.</div><br>
				</div>

				<div>
					<label for="usuid">id Usuario</label><br>
					<input class="form-control rounded" type="text" name="usuid" id="usuid" required>
					<div class="invalid-feedback">Complete el campo.</div><br>
				</div>

				<div>					
					<input class="form-control rounded" type="text" name="ficid" id="ficid" value="<?php echo $fichapuntero; ?>" hidden>					
				</div>
				
					<div class="modal-footer">
					<button type="button" class="btn btn-secondary btn-gris" data-dismiss="modal" onclick="CancelarAnuncio();">Cerrar</button>
					<button type="button" id="btnguardar" class="btn btn-primary btn-rounded">Crear</button>
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
										InsertAnuncio();
										$('#modalanuncios').modal('hide');
									}
									if (nombreBoton == "Actualizar"){
										UpdateAnuncio();
										$('#modalanuncios').modal('hide');
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


