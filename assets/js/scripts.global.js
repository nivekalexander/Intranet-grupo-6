$(".modal").on('hidden.bs.modal', function () {
  if($("#formulario").hasClass('was-validated')){
    $("#formulario").removeClass('was-validated');
  }  
  document.formulario.reset();
});
$(".ToggleOpti").on("click",function(){

  if(this.id=="logout")
  {
      window.location.href = ('./logout.php');
  }			
});

