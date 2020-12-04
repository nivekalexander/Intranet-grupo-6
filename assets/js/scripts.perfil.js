function ObjAjax() {
    var xmlhttp = false;
    try { xmlhttp = new ActiveXObject("Msxml2.XMLHTTP"); } catch (e) {
        try { xmlhttp = new ActiveXObject("Microsoft.XMLHTTP"); } catch (E) { xmlhttp = false; }
    }
    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') { xmlhttp = new XMLHttpRequest(); }
    return xmlhttp;
}


function MostrarPerfil() {

    // Quitar modo lectura a los campos
    $('#nombre-perfil').removeAttr("readonly");
    $('#apellido-perfil').removeAttr('readonly');
    $('#contraseña-perfil').removeAttr('readonly');
    $('#id-perfil').removeAttr('readonly');
    $('#correo-perfil').removeAttr('readonly');

    // Mostrar botón ver contraseña
    $('#ver-pass').attr('style', 'display: initial;');

    // Mostrar botón actualizar
    $('#actualizar-perfil').removeAttr('hidden');

    // Ocultar botón editar
    $('#editar-perfil').attr('hidden', 'true');

    // Ocultar ventana modal
    $('#confirmarDatos').modal('hide');
}

function ActualizarPerfil() {

    // Agregar modo lectura a los campos 
    $('#nombre-perfil').attr('readonly', 'true');
    $('#apellido-perfil').attr('readonly', 'true');
    $('#contraseña-perfil').attr('readonly', 'true');
    $('#id-perfil').attr('readonly', 'true');
    $('#correo-perfil').attr('readonly', 'true');

    // Ocultar botón ver contraseña
    $('#ver-pass').attr('style', 'display: none;');

    // Ocultar botón actualizar 
    $('#actualizar-perfil').attr('hidden', 'true');

    // Mostrar botón editar 
    $('#editar-perfil').removeAttr('hidden');
}

function VisualizarPass() {

    if ($('#contraseña-perfil').attr('type') == 'password') {
        $('#contraseña-perfil').attr('type', 'text');
        $('#vpss').attr('src', '../assets/img/img-perfil/ojonegro.svg');
    } else {
        $('#contraseña-perfil').attr('type', 'password');
        $('#vpss').attr('src', '../assets/img/img-perfil/invisible.svg');
    }

}

function ConfirmarPerfil() {

    var contras = document.formconfirmpass.contraseña.value;
    var confirm = document.formconfirmpass.confirm.value;

    var passhash = CryptoJS.MD5(contras).toString();

    alert(passhash);

    if (passhash != confirm) {

        $.alert({
            title: 'ERROR',
            content: 'Contraseña incorrecta',
            theme: 'modern',

            buttons: {
                Ok: function() {
                    location.reload();
                }
            }
        });

    } else {
        MostrarPerfil();
    }
}


function ActualizarPerfil() {

    var result = document.getElementById('tview');

    var id = document.formulario.idperfil.value;

    var nombre = document.formulario.nombreperfil.value;
    var apellido = document.formulario.apellidoperfil.value;
    var contraseña = document.formulario.contraseñaperfil.value;
    var correo = document.formulario.correoperfil.value;

    const ajax = new XMLHttpRequest();
    ajax.open("POST", "main.php", true);
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) {
            if (ajax.status == 200) {
                result.innerHTML = ajax.responseText;

            } else { console.log("Ups, Me equivoque;"); }
        }
    };

    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send("ctrl=perfil&acti=actualizarperfil&nombre=" + nombre + "&apellido=" + apellido + "&contraseña=" + contraseña + "&correo=" + correo + "&id=" + id);

}

window.onload = function UpdateSusses() {

    $("#actualizar-perfil").on("click", function() {

        $.alert({
            title: 'Actualización exitosa',
            content: 'Se han actualizado en los datos correctamente',
            theme: 'modern',

            buttons: {
                Ok: function() {
                    location.reload();
                }
            }
        });
    });


};