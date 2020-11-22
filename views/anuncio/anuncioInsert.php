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

		 <form name="formanuncio" id="formanuncio" >

				<input type="text" name="id" hidden>

				<label for="titulo">Titulo</label><br>
				<input class="form-control rounded-0" type="text" name="titulo" id="titulo"><br>

				<label for="descrp">Descripcion</label><br>
				<textarea class="form-control rounded-0" name="descrp" id="descrp" rows="3"></textarea><br>

				<label for="fchcre">Fecha Creacion</label><br>
				<input class="form-control rounded-0" type="date" name="fchcre" id="fchcre"><br>

				<label for="fchfin">Fecha Fin</label><br>
				<input class="form-control rounded-0" type="date" name="fchfin" id="fchfin"><br>

				<label for="usuid">id Usuario</label><br>
				<input class="form-control rounded-0" type="text" name="usuid" id="usuid"><br>

				<label for="ficid">Ficha id</label><br>
				<input class="form-control rounded-0" type="text" name="ficid" id="ficid"><br>

				<div class="modal-footer">
       				<button type="button" class="btn btn-secondary btn-gris" data-dismiss="modal" onclick="CancelarAnuncio();">Cerrar</button>
       				<button id="btnguardar" data-dismiss="modal" type="button" class="btn btn-primary btn-rounded" onclick="InsertAnuncio();">Subir</button>
      			</div>

			</form>

      

    </div>
  </div>
</div>


