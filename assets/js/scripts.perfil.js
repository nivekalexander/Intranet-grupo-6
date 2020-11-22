function ConfirmarPerfil(){

    // Quitar modo lectura a los campos
    $('#nombre-perfil').removeAttr("readonly");
    $('#apellido-perfil').removeAttr('readonly');
    $('#contraseña-perfil').removeAttr('readonly');
    $('#id-perfil').removeAttr('readonly');    
    $('#correo-perfil').removeAttr('readonly');  

    // Mostrar botón actualizar
    $('#actualizar-perfil').removeAttr('hidden');  

    // Ocultar botón editar
    $('#editar-perfil').attr('hidden','true');  
    
    // Ocultar ventana modal
    $('#confirmarDatos').modal('hide');
}

function ActualizarPerfil(){

    // Agregar modo lectura a los campos 
    $('#nombre-perfil').attr('readonly','true');  
    $('#apellido-perfil').attr('readonly','true');  
    $('#contraseña-perfil').attr('readonly','true');  
    $('#id-perfil').attr('readonly','true');  
    $('#correo-perfil').attr('readonly','true');  

    // Ocultar botón actualizar 
    $('#actualizar-perfil').attr('hidden','true');  

    // Mostrar botón editar 
    $('#editar-perfil').removeAttr('hidden');  
}