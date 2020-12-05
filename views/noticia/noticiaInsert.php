<!-- Modal -->

<div class="modal fade" style="padding-top: 187px;" id="noticiaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header Color-Slidebar">
        <h5 class="modal-title dropdown-text-color" id="titlenoticias">Subir Archivo</h5>
        <button type="button" class="close dropdown-text-color" data-dismiss="modal" aria-label="Close" onclick="CancelarNoticia();">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">     

      <form id="formulario" name="formulario" class="needs-validation">   

          <div class="custom-file btn rounded" style="background-color: #e3e6f0; overflow: hidden;">
               <input type="number" name="idnews" id="id-news" hidden>
               <input type="file" name="file-news" id="file-news" accept="image/*" lang="es" required>               
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-gris" data-dismiss="modal" onclick="CancelarNoticia();">Cerrar</button>
            <button type="button" id="btnguardar" class="btn btn-rounded" >Subir</button>
          </div>
          
      </form>

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
                        document.getElementById("btnguardar").addEventListener('click', function(event) { 
                          if (form.checkValidity() === true) {
                            var nombreBoton = document.getElementById("btnguardar").innerHTML;
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
                            $.alert("Seleccione una imagen");
                            event.preventDefault();
                            event.stopPropagation();            
                          }                          
                        }, false);
                      });
                    }, false);
                  })();
                </script>             
    </div>
  </div>
</div>

<!--End Modal -->

