function ConfirmarPerfil(){

    // Quitar modo lectura a los campos
    $('#nombre-perfil').removeAttr("readonly");
    $('#apellido-perfil').removeAttr('readonly');
    $('#contraseña-perfil').removeAttr('readonly');
    $('#id-perfil').removeAttr('readonly');    
    $('#correo-perfil').removeAttr('readonly');  

    // Mostrar botón ver contraseña
    $('#ver-pass').attr('style','display: initial;');

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

    // Ocultar botón ver contraseña
    $('#ver-pass').attr('style','display: none;');

    // Ocultar botón actualizar 
    $('#actualizar-perfil').attr('hidden','true');  

    // Mostrar botón editar 
    $('#editar-perfil').removeAttr('hidden');  
}

function VisualizarPass(){    
    
    if($('#contraseña-perfil').attr('type')=='password'){
        $('#contraseña-perfil').attr('type','text');
    }else{
        $('#contraseña-perfil').attr('type','password');
    }
    
}