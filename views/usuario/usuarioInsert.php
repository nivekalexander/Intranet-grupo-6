
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

					<input class="form-control rounded" type="number" id="validationid" name="validationid" hidden>

					<div class="form-group row">
					<label id="NumDoc" for="nombre">Numero de documento</label>
					<input class="form-control rounded" type="number" id="id" name="id" required>
					<div class="invalid-feedback">Ingrese un Número de Documento</div>
					</div>

					<div class="form-group row">
						<label id="UsuName" for="nombre">Nombre</label>
						<input class="form-control rounded" type="text" name="nombre" id="nombre" onkeypress="return soloLetras(event)" required>
						<div class="invalid-feedback">Ingrese un Nombre</div>
					</div>

					<div class="form-group row" id="divapellido">
						<label id="Last" for="apellido">Apellido</label>
						<input class="form-control rounded" name="apellido" id="apellido" onkeypress="return soloLetras(event)" required>
						<div class="invalid-feedback">Ingrese un Apellido</div>
					</div>

					<div class="form-group row">
						<label for="contraseña">Contraseña</label>
						<div class="input-group mb-2">						
							<input class="form-control rounded" type="password" name="contraseña" id="contraseña" required>
							<div id="ver-pass" class="rounded-circle ver-pass input-group-prepend">
								<a id="visualizar-Pass" onclick="VerPass();">
									<img id="vpss" class="vpss" height="37" width="37" src="../assets/img/img-perfil/invisible.svg" alt="">
								</a>
							</div>
							<div class="invalid-feedback">Ingrese una Contraseña</div>
						</div>				
					</div>

					<div class="form-group row">
						<label for="correo" id="correolabel">Correo</label>
						<input class="form-control rounded" type="email" name="correo" id="correo" required>
						<div class="invalid-feedback">Introduzca una Dirección de Correo Valida.</div>
					</div>

					<div>
						<input class="form-control rounded" name="rol" id="rol" hidden>
					</div>

					<div class="form-group row">
						<label for="estado">Estado</label>
						<select class="form-control rounded" name="estado" id="estado" >
								<?php
									foreach ($this->estado->Select() as $datos): 
										echo '<option value="'.$datos->est_id.'">'.$datos->est_nombre.'</option>';
									endforeach;
								?>
							</select>
						<div class="invalid-feedback">Seleccione un Campo.</div>
					</div>

					<div class="form-group row">
						<label for="identi">Tipo Identificaion</label>
						<select class="form-control rounded" name="identi" id="identi" required>
								<?php
									foreach ($this->tipoidentificacion->Select() as $datos): 
										echo '<option value="'.$datos->tip_id.'">'.$datos->tip_idntfc.'</option>';
									endforeach;
								?>
							</select>
						<div class="invalid-feedback">Seleccine un Campo.</div>
					</div>

				
					<div class="modal-footer form-group">
						<button type="button" class="btn btn-secondary btn-gris" data-dismiss="modal" onclick="CancelarUsuario();">Cerrar</button>
						<button type="button" id="btnguardar" class="btn btn-primary btn-rounded">Crear</button>
					</div>

				</form>

		    </div>
		</div>   
	</div>
</div>



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

					<form  name="modalfichasAll" id="modalfichasAll" class="needs-validation" >
						<div class="form-group row">
							
							<label for="usuariofichaagregar">Identificacion De Usuario</label>
							<input class="form-control rounded" type="text" id="usuariofichaagregar"  readonly>

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
							<button type="button" id="btnguardar" class="btn btn-primary btn-rounded" onclick="AgregarFichaConfirmar()">Agregar Ficha</button>

						</div>
					</form>	
				</div>
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
				<div class="container">
					<form  name="modalfichasAll" id="modalfichasAll" class="needs-validation" >
						<div class="form-group row">
							<label for="ficha">Identificacion De Usuario</label>
							<input class="form-control rounded" type="number" id="usuariofichaeliminar" readonly>
						</div>
						<div class="form-group row">
							<label for="ficha">Ingrese La Ficha A Eliminar</label>
							<input class="form-control rounded" type="number" id="fichaeliminar" required>
							<div class="invalid-feedback">Elija una ficha</div>
						</div>
						<div class="modal-footer">

							<button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="EliminarCancelar()">Cancelar</button>
							<button type="button" id="btnguardar" class="btn btn-primary btn-rounded" onclick="EliminarFichaConfirmar()">Eliminar Ficha</button>

						</div>
					</form>
				</div>	
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
				if (nombreBoton == "Crear"){
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



