<!-- Modal -->

<div class="modal fade" id="horarioModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header Color-Slidebar">
        <h5 class="modal-title dropdown-text-color" id="ModalLabelArchivo">Subir Archivo</h5>
        <button type="button" class="close dropdown-text-color" data-dismiss="modal" aria-label="Close" onclick="CancelarHorario();">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form id="formulario" name="formulario" class="needs-validation" novalidate>   

        <div class="modal-body">           
            <input type="number" name="id" id="id" hidden>
            <label>Horario PDF</label>
          <div class="form-group btn rounded" style="background-color: #e3e6f0; overflow: hidden;">                                    
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

          <input type="text" id="idficha" name="idficha" value="<?php echo $_REQUEST['fcpt']; ?>" hidden>  
                                  
        </div>

        <div class="modal-footer">
          <button type="button" id="cancel-hor" class="btn btn-secondary btn-gris" data-dismiss="modal" onclick="CancelarHorario();">Cerrar</button>
          <button type="button" id="btnguardar" class="btn btn-primary btn-rounded" >Subir</button>
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
        document.getElementById("btnguardar").addEventListener('click', function(event) {        
          if (form.checkValidity() === true) {            
            var nombreBoton = document.getElementById("btnguardar").innerHTML;
            var filesize = formulario.file.files[0].size;            
            if(filesize<2000000){
              if (nombreBoton == "Subir"){                            
                InsertHorario();
                $('#horarioModal').modal('hide');              
              }
              if (nombreBoton == "Actualizar"){
                UpdateHorario();
                $('#horarioModal').modal('hide');
              }
            }else{
                $.alert('El archivo seleccionado excede el limite de 2MB');
            }                         
          }
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();                                    
          }          
          form.classList.add('was-validated');
          $("#horarioModal").on('hidden.bs.modal', function () {
            formhorario.classList.remove('was-validated');
            formhorario.reset();
          });
        }, false);
                
      });
    }, false);
  })();
</script>

