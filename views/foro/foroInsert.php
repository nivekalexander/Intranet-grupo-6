<div class="modal fade" style="padding-top: 187px;" id="foroModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header Color-Slidebar">
        <h5 class="modal-title dropdown-text-color" id="ModalLabelForo">Crear Foro</h5>
        <button type="button" class="close dropdown-text-color" data-dismiss="modal" aria-label="Close" onclick="CancelarForo();">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form id="formforo" name="formulario" class="needs-validation" novalidate>   

      <div class="modal-body">

                  <input type="number" name="id" id="id" hidden>                  

                <div>
                    <label for="titulo">Titulo</label><br>
                    <input class="form-control rounded" type="text" name="titulo" id="titulo" required></input>
                    <div class="invalid-feedback">Complete el campo.</div><br>
				</div>

                <div>
                    <label for="descrp">Descripcion</label><br>
                    <textarea class="form-control rounded" name="descrp" id="descrp" rows="3" required></textarea>
                    <div class="invalid-feedback">Complete el campo.</div><br>
				</div>
                
                <div>
                  <label for="fchini">Fecha Inicio Foro</label><br>
                  <input class="form-control rounded" type="date" name="fchini" id="fchini" required>
                  <div class="invalid-feedback">Complete el campo.</div><br>
                </div>

                <div>
                  <label for="fchfin">Fecha Fin Foro</label><br>
                  <input class="form-control rounded" type="date" name="fchfin" id="fchfin" required>
                  <div class="invalid-feedback">Complete el campo.</div><br>
                </div> 

                <input type="text" id="idficha" name="idficha" hidden>  
                               
      </div>

      <div class="modal-footer">
        <button type="button" id="cancel-for" class="btn btn-secondary btn-gris" data-dismiss="modal" onclick="CancelarForo();">Cerrar</button>
        <button type="button" id="subir-for" class="btn btn-primary btn-rounded" >Subir</button>
      </div>

      </form>  
      
    </div>
  </div>
</div>

<script>


(function() {
    'use strict';            
    window.addEventListener('load', function() {         
        
        var forms = document.getElementsByClassName('needs-validation');                
        var validation = Array.prototype.filter.call(forms, function(form) {        
            document.getElementById("subir-for").addEventListener('click', function(event) {          
                if (form.checkValidity() === true) {                                  
                    var nombreBoton = document.getElementById("subir-for").innerHTML;
                    if (nombreBoton == "Subir"){                            
                        InsertForo();
                        $('#foroModal').modal('hide');              
                    }
                    if (nombreBoton == "Actualizar"){
                        UpdateForo();
                        $('#foroModal').modal('hide');
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
