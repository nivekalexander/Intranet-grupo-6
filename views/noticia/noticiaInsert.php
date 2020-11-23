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
      <form id="formnoticia" name="formnoticia" class="needs-validation" novalidate>
      <div class="modal-body">        
            <div class="form-group row justify-content-center">
                <input type="number" name="idnews" id="id-news" hidden>
                <input type="file" class="form-control-file" name="file-news" id="file-news" accept="image/*" required>
                <input type="text" class="form-control" id="validationCustom05" required>
            </div>              
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-gris" data-dismiss="modal">Cerrar</button>
        <button type="submit" id="subir-news" type="button" class="btn btn-primary btn-rounded" onclick="InsertNoticia();">Subir</button>
      </div>
      </form>  
    </div>
  </div>
</div>
<!--End Modal -->

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
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
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

