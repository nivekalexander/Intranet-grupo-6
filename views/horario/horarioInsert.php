<!-- Modal -->

<div class="modal fade" style="padding-top: 187px;" id="horarioModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header Color-Slidebar">
        <h5 class="modal-title dropdown-text-color" id="ModalLabelArchivo">Subir Archivo</h5>
        <button type="button" class="close dropdown-text-color" data-dismiss="modal" aria-label="Close" onclick="CancelarNoticia();">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form id="formhorario" name="formhorario" class="needs-validation">   

      <div class="modal-body">           
                  <input type="number" name="id" id="id" hidden>
                  <label>Horario PDF</label>
                <div class="form-group custom-file btn rounded" style="background-color: #e3e6f0; overflow: hidden;">                                    
                  <input type="file" name="file" id="file" accept=".pdf" lang="es" required>
                  <div class="invalid-feedback">No se ha seleccionado ningun archivo</div>                
                </div><br><br>

                <div class="form-group">
                  <label for="trinum">Número del trimestre</label>
                  <select class="form-control" id="trinum" name="trinum" required>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                  </select>
                </div>

                <div>
                  <label for="fchinicio">Fecha Inicio Trimestre</label><br>
                  <input class="form-control rounded" type="date" name="fchinicio" id="fchinicio" required>
                  <div class="invalid-feedback">Complete el campo.</div><br>
                </div>

                <div>
                  <label for="fchfin">Fecha Fin Trimestre</label><br>
                  <input class="form-control rounded" type="date" name="fchfin" id="fchfin" required>
                  <div class="invalid-feedback">Complete el campo.</div><br>
                </div> 

                <input type="text" id="idficha" name="idficha" hidden>  
                               
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-gris" data-dismiss="modal" onclick="CancelarNoticia();">Cerrar</button>
        <button type="submit" id="subir-hor" class="btn btn-primary btn-rounded" >Subir</button>
        <!-- onclick="InsertNoticia();" -->
      </div>

      </form>  
      
    </div>
  </div>
</div>
<!--End Modal -->

<script>

// document.getElementById("customFileLang").innerHTML = document.getElementById("file-hor").files[0].name;

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
            var nombreBoton = document.getElementById("subir-hor").innerHTML;
            if (nombreBoton == "Subir"){
              InsertHorario();
              $('#horarioModal').modal('hide');
            }
            if (nombreBoton == "Actualizar"){
              UpdateHorario();
              $('#horarioModal').modal('hide');
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

