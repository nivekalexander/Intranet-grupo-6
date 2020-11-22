<!-- Modal -->
<script src="../assets/js/scripts.anuncio.js"></script>	
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

		 <form name="formanuncio" id="formanuncio" class="needs-validation" onSubmit="event.preventDefault();" novalidate>

				<input type="text" name="id" hidden>

				<label for="titulo">Titulo</label><br>
				<input class="form-control rounded-0" type="text" name="titulo" id="titulo" placeholder="Titulo" required><br>
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
       				<button type="submit" id="btnguardar" data-dismiss="modal" type="button" class="btn btn-primary btn-rounded" onclick="InsertAnuncio();">Crear</button>
				</div>

		</form>
    </div>
  </div>
</div>


