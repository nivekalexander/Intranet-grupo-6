<!-- Modal -->

<div class="modal fade" id="modalmaterialapoyo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog" role="document">
	  <div class="modal-content">
			<div class="modal-header Color-Slidebar">
				<h5 class="modal-title dropdown-text-color" id="titlematerialapoyo">Crear Material De Apoyo</h5>
				<button type="button" class="close dropdown-text-color" data-dismiss="modal" aria-label="Close" onclick="CancelarMaterialApoyo();">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body espaciado">

				<form name="formulario" id="formulario" class="needs-validation" novalidate>

						<input type="text" name="idmodal" id="idmodal" hidden>
						
                    <div>
						
						<input class="form-control rounded" type="text"  value="<?php echo $_SESSION['SIdu'];?>" name="publicadormodal" id="publicadormodal" hidden>
						
					</div>

					<div>
						<label for="titulomodal">Titulo</label><br>
						<input class="form-control rounded" type="text" name="titulomodal" id="titulomodal" required>

						<div class="invalid-feedback">Ingrese un Título</div><br>
					</div>
                    
					<div>
						<label for="descrpmodal">Descripcion</label><br>
						<textarea class="form-control rounded" name="descrpmodal" id="descrpmodal" rows="3" required></textarea>
						<div class="invalid-feedback">Ingrese una Descripción</div><br>
					</div>
					<div>
					<label for="fasestitulo">Fase</label><br>
					
					<select class="form-control rounded" name="fasesmodal" id="fasesmodal" required>

						<?php foreach ( $this->fases->Select() as $filas ): 
							echo '<option value="'.$filas->fas_id.'">'.$filas->fas_nombre.'</option>';
						 endforeach; ?>

                    </select>
					</div>

					<div><br>
						<label for="file-archivo">Material De Apoyo</label><br>
						<input type="file" id="file-archivo" lang="es" required>
						<div class="invalid-feedback">No se ha Ingresado un Archivo</div><br>
					</div>

					
					
					<div class="modal-footer">
					<button type="button" class="btn btn-secondary btn-gris" data-dismiss="modal" onclick="CancelarMaterialApoyo();">Cerrar</button>
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
										InsertMaterialApoyo();
										$('#modalmaterialapoyo').modal('hide');
									}
									if (nombreBoton == "Actualizar"){
										UpdateMaterialApoyo();
										$('#modalmaterialapoyo').modal('hide');
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
