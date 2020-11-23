<!-- Modal -->

<div class="modal fade" id="modalanuncios" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
	  <div class="modal-content">
			<div class="modal-header Color-Slidebar">
				<h5 class="modal-title dropdown-text-color" id="exampleModalLabel">Crear anuncio</h5>
				<button type="button" class="close dropdown-text-color" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body espaciado">

				<form name="formanuncio" id="formanuncio" class="needs-validation"  novalidate>

					<input type="text" name="id" hidden>
					
					<label for="titulo">Titulo</label><br>
					<input class="form-control rounded-0 " type="text" name="titulo" id="titulo" placeholder="Titulo" required><br>
					<div class="valid-feedback">¡Ok Válido!</div>
					<div class="invalid-feedback">Complete el campo.</div>
					
					<label for="descrp">Descripcion</label><br>
					<textarea class="form-control rounded-0" name="descrp" id="descrp" rows="3" required></textarea><br>

					<label for="fchcre">Fecha Creacion</label><br>
					<input class="form-control rounded-0" type="date" name="fchcre" id="fchcre" required><br>

					<label for="fchfin">Fecha Fin</label><br>
					<input class="form-control rounded-0" type="date" name="fchfin" id="fchfin" required><br>

					<label for="usuid">id Usuario</label><br>
					<input class="form-control rounded-0" type="text" name="usuid" id="usuid" required><br>

					<label for="ficid">Ficha id</label><br>
					<input class="form-control rounded-0" type="text" name="ficid" id="ficid" required><br>

					<div class="modal-footer">
					<button type="button" class="btn btn-secondary btn-gris" data-dismiss="modal" onclick="CancelarAnuncio();">Cerrar</button>
					<button type="submit" id="btnguardar" class="btn btn-primary btn-rounded" data-dismiss="modal" onclick="InsertAnuncio();">Crear</button>
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
								if (form.checkValidity() === false) {
									event.preventDefault();
									event.stopPropagation();

									//tal vez es acá donde tenes que llamar el jquery

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


