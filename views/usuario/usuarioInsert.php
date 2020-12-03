
<!-- Modal -->

<div class="modal fade" id="modalusuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog" role="document">
	  <div class="modal-content">
			<div class="modal-header Color-Slidebar">
				<h5 class="modal-title dropdown-text-color" id="titleusuario">Crear Usuario</h5>
				<button type="button" class="close dropdown-text-color" data-dismiss="modal" aria-label="Close" onclick="CancelarUsuario();">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
   
			<div class="modal-body espaciado">

				<form name="formulario" id="formulario" class="needs-validation" >

					<div>
					<label for="nombre">Numero de documento</label><br>
					<input class="form-control rounded" type="number" id="id" name="id" required>
					<div class="invalid-feedback">Complete el campo.</div><br>
					</div>

					<div>
						<label for="nombre">Nombre</label><br>
						<input class="form-control rounded" type="text" name="nombre" id="nombre" required>
						<div class="invalid-feedback">Complete el campo.</div><br>
					</div>

					<div>
						<label for="apellido">Apellido</label><br>
						<input class="form-control rounded" name="apellido" id="apellido" required>
						<div class="invalid-feedback">Complete el campo.</div><br>
					</div>

					<div>
						<label for="contraseña">Contraseña</label><br>
						<div class="input-group mb-2">						
							<input class="form-control rounded" type="password" name="contraseña" id="contraseña" required>
							<div id="ver-pass" class="rounded-circle ver-pass input-group-prepend">
								<a id="visualizar-Pass" onclick="VerPass();">
									<img height="37" width="37" src="https://www.flaticon.es/svg/static/icons/svg/40/40498.svg" alt="">
								</a>
							</div>
							<div class="invalid-feedback">Complete el campo.</div><br>
						</div>				
					</div>

					<div>
						<label for="correo">Correo</label><br>
						<input class="form-control rounded" type="email" name="correo" id="correo" required>
						<div class="invalid-feedback">Introduzca una dirección de correo valida.</div><br>
					</div>

					<div>
						<label for="ficha">Ficha id</label><br>
							<select class="form-control rounded" name="ficha" id="fich" required>
								<?php
									foreach ($this->ficha->Select() as $datos): 
										echo '<option value="'.$datos->fic_codigo.'">'.$datos->fic_codigo.'</option>';
									endforeach;
								?>
							</select>
						<div class="invalid-feedback">Seleccione un Campo</div><br>
					</div>

					<div>
						<input class="form-control rounded" name="rol" id="rol" hidden>
					</div>

					<div>
						<label for="estado">Estado</label><br>
						<select class="form-control rounded" name="estado" id="estado" >
								<?php
									foreach ($this->estado->Select() as $datos): 
										echo '<option value="'.$datos->est_id.'">'.$datos->est_nombre.'</option>';
									endforeach;
								?>
							</select>
						<div class="invalid-feedback">Seleccione un Campo.</div><br>
					</div>

					<div>
						<label for="identi">Tipo Identificaion</label><br>
						<select class="form-control rounded" name="identi" id="identi" required>
								<?php
									foreach ($this->tipoidentificacion->Select() as $datos): 
										echo '<option value="'.$datos->tip_id.'">'.$datos->tip_idntfc.'</option>';
									endforeach;
								?>
							</select>
						<div class="invalid-feedback">Seleccine un Campo.</div><br>
					</div>

				
					<div class="modal-footer">
					<button type="button" class="btn btn-secondary btn-gris" data-dismiss="modal" onclick="CancelarUsuario();">Cerrar</button>
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
										document.getElementById('id').removeAttribute("disabled");
										InsertUsuario();
										$('#modalusuario').modal('hide');
									}
									if (nombreBoton == "Actualizar"){
										UpdateUsuario();
										$('#modalusuario').modal('hide');
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


