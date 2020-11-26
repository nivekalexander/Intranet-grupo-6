function ObjAjax() {
    var xmlhttp = false;
    try { xmlhttp = new ActiveXObject("Msxml2.XMLHTTP"); } catch (e) {
        try { xmlhttp = new ActiveXObject("Microsoft.XMLHTTP"); } catch (E) { xmlhttp = false; }
    }
    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') { xmlhttp = new XMLHttpRequest(); }
    return xmlhttp;
}


function BorrarUsuario(id) {
    $.confirm({
        title: 'Confirmación!',
        content: '¿Esta seguro que desea eliminar este usuario?',
        buttons: {
            confirm: function() {
                $.alert('Se ha eliminado correctamente');

                var result = document.getElementById('tview');

                const ajax = new XMLHttpRequest(); 
                ajax.open("POST", "main.php", true); 
                ajax.onreadystatechange = function() {
                    if (ajax.readyState == 4) 
                    {
                        if (ajax.status == 200) 
                        {

                            result.innerHTML = ajax.responseText;

                        } else {
                            console.log("Ups, Me equivoque;");
                        }
                    }
                };

                ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                ajax.send("ctrl=usuario&acti=eliminar&id=" + id);
            },
            cancel: function() {
                $.alert('Has cancelado la eliminación');
            }
        }
    });

}
      

function InsertUsuario() {
    var result = document.getElementById('tview');


    var nombre      = document.formusuario.nombre.value;
    var apellido    = document.formusuario.apellido.value;
    var contraseña  = document.formusuario.contraseña.value;
    var correo      = document.formusuario.correo.value;
    var ficha       = document.getElementById('fich').value;
    var rol         = document.getElementById('rol').value;
    var estado      = document.getElementById('estado').value;
    var identi      = document.getElementById('identi').value;
    


    const ajax = new XMLHttpRequest(); 
    ajax.open("POST", "main.php", true); 
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) 
        {
            if (ajax.status == 200) 
            {

                result.innerHTML = ajax.responseText;

            } else {
                console.log("Ups, Me equivoque;");
            }
        }
    };

    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send("ctrl=usuario&acti=insertar&nombre=" + nombre + "&apellido=" + apellido + "&contraseña=" + contraseña + "&correo=" + correo + "&ficha=" + ficha +"&rol="+rol+"&estado="+estado+"&identi="+identi);

    document.getElementById('formusuario').reset();
}





function EditarUsuario(id, nombre,apellido,contraseña,correo,ficha,rol,estado,identi){

    document.formusuario.id.value = id;

    document.formusuario.nombre.value       =  nombre ;
    document.formusuario.apellido.value     = apellido;
    document.formusuario.contraseña.value   = contraseña;
    document.formusuario.correo.value       = correo;
    document.getElementById('fich').value   = ficha;
    document.getElementById('rol').value    = rol;
    document.getElementById('estado').value = estado;
    document.getElementById('identi').value = identi;

    document.getElementById("btnguardar").innerHTML = "Actualizar";
    

    
}


function UpdateUsuario() {

    var result = document.getElementById('tview');
    
    var id          = document.formusuario.id.value;

    var nombre      = document.formusuario.nombre.value;
    var apellido    = document.formusuario.apellido.value;
    var contraseña  = document.formusuario.contraseña.value;
    var correo      = document.formusuario.correo.value;
    var ficha       = document.getElementById('fich').value;
    var rol         = document.getElementById('rol').value;
    var estado      = document.getElementById('estado').value;
    var identi      = document.getElementById('identi').value;
    
    document.getElementById('formusuario').reset();

    const ajax = new XMLHttpRequest(); 
    ajax.open("POST", "main.php", true); 
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) 
        {
            if (ajax.status == 200) 
            {
                result.innerHTML = ajax.responseText;
                document.getElementById("btnguardar").innerHTML = "Crear";


            } else { console.log("Ups, Me equivoque;"); }
        }
    };                                                                                                 
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send("ctrl=usuario&acti=actualizar&nombre="+nombre+"&apellido="+apellido+"&contraseña="+contraseña+"&correo="+correo+"&ficha="+ficha+"&rol="+rol+"&estado="+estado+"&identi="+identi+"&id="+id);

    

    
    document.getElementById('formusuario').reset();

}

function CancelarUsuario() {

    document.getElementById('formusuario').reset();
        
    document.getElementById("btnguardar").innerHTML = "Crear";
}

function ConfirmUsuario(id){
  document.getElementById('confirm').value = id;
 

  const ajax = new XMLHttpRequest(); 
    ajax.open("POST", "main.php", true); 
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) 
        {
            if (ajax.status == 200) 
            {
                result.innerHTML = ajax.responseText;
                document.getElementById("btnguardar").innerHTML = "Crear";


            } else { console.log("Ups, Me equivoque;"); }
        }
    };                                                                                                 
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send("ctrl=usuario&acti=seleccionar&rol=" + id);
  
}