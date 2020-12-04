
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
				<form  name="modalfichasAll" id="modalfichasAll" class="needs-validation" >
					<div class="form-group row">

						<input class="form-control rounded" type="text" id="usuariofichaagregar"  >

						<label for="ficha">Ficha id</label>
						<select class="form-control rounded" name="fichaagregar" id="fichaagregar" required>
							<?php
								foreach ($this->usuario->SelectFichaAll() as $datos): 
									echo '<option value="'.$datos->fic_codigo.'">'.$datos->fic_codigo.'</option>';
								endforeach;
							?>
						</select>
						<div class="invalid-feedback">Elija una ficha</div>
					</div>
					<div class="modal-footer">

						<button type="button" class="btn btn-secondary" data-dismiss="modal"onclick="AgregarCancelar()" >Cancelar</button>
						<button type="button" id="btnguardar" class="btn btn-primary btn-rounded">Agregar Ficha</button>

					</div>
				</form>	
			</div>
		
		</div>
  </div>
</div>

<!-- Modal 3 fichas 2-->
<div class="modal fade" id="modalfichasUSU" tabindex="-1" aria-labelledby="Label" aria-hidden="true">
  <div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalfichaLabel2">Eliminar Ficha</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="EliminarCancelar()">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form  name="modalfichasAll" id="modalfichasAll" class="needs-validation" >
					<div class="form-group row">
						<label for="ficha">Ficha id</label>
						<input class="form-control rounded" type="number" id="usuariofichaeliminar" hidden readonly>
						<input class="form-control rounded" type="number" id="fichaeliminar" readonly>
						<div class="invalid-feedback">Elija una ficha</div>
					</div>
					<div class="modal-footer">

						<button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="EliminarCancelar()">Cancelar</button>
						<button type="button" id="btnguardar" class="btn btn-primary btn-rounded">Eliminar Ficha</button>

					</div>
				</form>	
			</div>
		
		</div>
  </div>
</div>

			
								
				
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
			

				if (nombreBoton == "Agregar Ficha"){
					AgregarFichaConfirmar();
					$('#modalfichas').modal('hide');
				}
				if (nombreBoton == "Eliminar Ficha"){
					EliminarFichaConfirmar();
					$('#modalfichas').modal('hide');
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