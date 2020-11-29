$(".modal").on('hidden.bs.modal', function () {
  if($("#formulario").hasClass('was-validated')){
    $("#formulario").removeClass('was-validated');
  }  
  document.formulario.reset();
});


