<!-- Modal -->

<div class="modal fade" style="padding-top: 187px;" id="noticiaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header Color-Slidebar">
        <h5 class="modal-title dropdown-text-color" id="exampleModalLabel">Subir Archivo</h5>
        <button type="button" class="close dropdown-text-color" data-dismiss="modal" aria-label="Close" onclick="CancelarNoticia();">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">     

      <form id="formnoticia" name="formnoticia" class="needs-validation">   
            <div class="custom-file btn rounded" style="background-color: #e3e6f0; overflow: hidden;">
                <input type="number" name="idnews" id="id-news" hidden>
                <input type="file" name="file-news" id="file-news" accept="image/*" lang="es" required>
                <div class="invalid-feedback">No se a seleccionado ningun archivo</div>
            </div>                        
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-gris" data-dismiss="modal" onclick="CancelarNoticia();">Cerrar</button>
        <button type="submit" id="subir-news" class="btn btn-primary btn-rounded" >Subir</button>
        <!-- onclick="InsertNoticia();" -->
      </div>
      </form>  
    </div>
  </div>
</div>
<!--End Modal -->

<script>

// document.getElementById("customFileLang").innerHTML = document.getElementById("file-news").files[0].name;

// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
    'use strict';        
    window.addEventListener('load', function() {         
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {        
        form.addEventListener('submit', function(event) {
          
          if (form.checkValidity() === true) {
            var nombreBoton = document.getElementById("subir-news").innerHTML;
            if (nombreBoton == "Subir"){
              InsertNoticia();
              $('#noticiaModal').modal('hide');
            }
            if (nombreBoton == "Actualizar"){
              UpdateNoticia();
              $('#noticiaModal').modal('hide');
            }
           
          }
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();            
          }
          //form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
</script>

