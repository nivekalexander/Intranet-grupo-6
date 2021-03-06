<div class="modal fade" id="foroModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header Color-Slidebar">
        <h5 class="modal-title dropdown-text-color" id="ModalLabelForo">Crear Foro</h5>
        <button type="button" class="close dropdown-text-color" data-dismiss="modal" aria-label="Close" onclick="CancelarForo();">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form id="formulario" name="formulario" class="needs-validation" autocomplete="off" novalidate>   

        <div class="modal-body">

          <input type="number" name="id" id="id" hidden>                  

          <div>
            <label for="titulo">Titulo</label><br>
            <input class="form-control rounded" type="text" name="titulo" id="titulo" required></input>
            <div class="invalid-feedback">Ingrese un Título</div><br>
          </div>

          <div>
            <label for="descrp">Descripcion</label><br>
            <textarea class="form-control rounded" name="descrp" id="descrp" rows="3" required></textarea>
            <div class="invalid-feedback">Ingrese una Descripción</div><br>
          </div>
              

          <div>
            <label for="fchfin">Fecha Fin Foro</label><br>
            <input class="form-control rounded" type="date" name="fchfin" id="fchfin" required>
            <div class="invalid-feedback">Ingrese una Fecha</div><br>
          </div> 

          <input type="text" id="idficha" name="idficha" value="<?php echo $_SESSION['grupoficha']; ?>" hidden>  
          <input type="text" id="idusuario" name="idusuario" value="<?php echo $_SESSION['SIdu']; ?>" hidden> <!--recibe el id del usuario-->                   
        
        </div>

        <div class="modal-footer">
          <button type="button" id="cancel-for" class="btn btn-gris" data-dismiss="modal" onclick="CancelarForo();">Cerrar</button>
          <button type="button" id="btnguardar" class="btn btn-rounded" >Crear</button>
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
            document.getElementById("btnguardar").addEventListener('click', function(event) {                  
                if (form.checkValidity() === true) {                                  
                    var nombreBoton = document.getElementById("btnguardar").innerHTML;                   
                    if (nombreBoton == "Crear"){                         
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
