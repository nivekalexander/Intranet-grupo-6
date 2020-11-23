<!-- Modal -->

<div class="modal fade" style="padding-top: 187px;" id="noticiaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header Color-Slidebar">
        <h5 class="modal-title dropdown-text-color" id="exampleModalLabel">Subir Archivo</h5>
        <button type="button" class="close dropdown-text-color" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
        <form action="" id="formnoticia" name="formnoticia">
            <div class="form-group row justify-content-center">
                <input type="number" name="idnews" id="id-news" hidden>
                <input type="file" name="file-news" id="file-news" accept="image/*">
            </div>
        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-gris" data-dismiss="modal">Cerrar</button>
        <input type="button" id="subir-news" type="button" class="btn btn-primary btn-rounded" onclick="InsertNoticia();" value="Subir">
      </div>

    </div>
  </div>
</div>
<!--End Modal -->

