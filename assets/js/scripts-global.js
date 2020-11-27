$(".modal").on('hidden.bs.modal', function () {
  if($("form").hasClass('was-validated')){
    $("form").removeClass('was-validated');
  }  
  document.formulario.reset();
});

