function ObjAjax() {
    var xmlhttp = false;
    try { xmlhttp = new ActiveXObject("Msxml2.XMLHTTP"); } catch (e) {
        try { xmlhttp = new ActiveXObject("Microsoft.XMLHTTP"); } catch (E) { xmlhttp = false; }
    }
    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') { xmlhttp = new XMLHttpRequest(); }
    return xmlhttp;
}


function BorrarUsuario(id, rolid) {
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
                    if (ajax.readyState == 4) {
                        if (ajax.status == 200) {

                            result.innerHTML = ajax.responseText;

                            $(document).ready(function() {
                                $('#tableusuario').DataTable({
                                    dom: 'Bfrtip',
                                    buttons: ['copy', 'excel', 'pdf', 'csv'],
                                    "language": {
                                        "url": "../assets/datatables/Spanish.json"
                                    }
                                });
                            });


                        } else {
                            console.log("Ups, Me equivoque;");
                        }
                    }
                };

                ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                ajax.send("ctrl=usuario&acti=eliminar&id=" + id + "&rol=" + rolid);

            },
            cancel: function() {
                $.alert('Has cancelado la eliminación');
            }
        }
    });


}


function InsertUsuario() {


    var result = document.getElementById('tview');

    var id = document.formulario.id.value;
    var nombre = document.formulario.nombre.value;
    var apellido = document.formulario.apellido.value;
    var contraseña = document.formulario.contraseña.value;
    var correo = document.formulario.correo.value;
    var ficha = document.getElementById('fich').value;
    var rol = document.getElementById('rol').value;
    var estado = document.getElementById('estado').value;
    var identi = document.getElementById('identi').value;



    const ajax = new XMLHttpRequest();
    ajax.open("POST", "main.php", true);
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) {
            if (ajax.status == 200) {

                result.innerHTML = ajax.responseText;
                $(document).ready(function() {
                    $('#tableusuario').DataTable({
                        dom: 'Bfrtip',
                        buttons: ['copy', 'excel', 'pdf', 'csv'],
                        "language": {
                            "url": "../assets/datatables/Spanish.json"
                        }
                    });
                });

            } else {
                console.log("Ups, Me equivoque;");
            }
        }
    };

    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send("ctrl=usuario&acti=insertar&id=" + id + "&nombre=" + nombre + "&apellido=" + apellido + "&contraseña=" + contraseña + "&correo=" + correo + "&ficha=" + ficha + "&rol=" + rol + "&estado=" + estado + "&identi=" + identi);

}





function EditarUsuario(id, nombre, apellido, contraseña, correo, ficha, rol, estado, identi) {

    document.formulario.id.value = id;
    document.formulario.validationid.value = id;
    document.formulario.nombre.value = nombre;
    document.formulario.apellido.value = apellido;
    document.formulario.contraseña.value = contraseña;
    document.formulario.correo.value = correo;
    document.getElementById('fich').value = ficha;
    document.getElementById('rol').value = rol;
    document.getElementById('estado').value = estado;
    document.getElementById('identi').value = identi;

    document.getElementById("btnguardar").innerHTML = "Actualizar";
    document.getElementById("titleusuario").innerHTML = "Actualizar usuario";

}


function UpdateUsuario() {

    var result = document.getElementById('tview');

    var valid = document.formulario.validationid.value;
    var id = document.formulario.id.value;

    var nombre = document.formulario.nombre.value;
    var apellido = document.formulario.apellido.value;
    var contraseña = document.formulario.contraseña.value;
    var correo = document.formulario.correo.value;
    var ficha = document.getElementById('fich').value;
    var rol = document.getElementById('rol').value;
    var estado = document.getElementById('estado').value;
    var identi = document.getElementById('identi').value;



    const ajax = new XMLHttpRequest();
    ajax.open("POST", "main.php", true);
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) {
            if (ajax.status == 200) {
                result.innerHTML = ajax.responseText;
                $(document).ready(function() {
                    $('#tableusuario').DataTable({
                        dom: 'Bfrtip',
                        buttons: ['copy', 'excel', 'pdf', 'csv'],
                        "language": {
                            "url": "../assets/datatables/Spanish.json"
                        }
                    });
                });
                document.getElementById("btnguardar").innerHTML = "Crear";


            } else { console.log("Ups, Me equivoque;"); }
        }
    };
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send("ctrl=usuario&acti=actualizar&nombre=" + nombre + "&apellido=" + apellido + "&contraseña=" + contraseña + "&correo=" + correo + "&ficha=" + ficha + "&rol=" + rol + "&estado=" + estado + "&identi=" + identi + "&id=" + id + "&valid=" + valid);

    document.getElementById('rol').value = rol;

    document.getElementById("titleusuario").innerHTML = "Crear usuario";
}

function CancelarUsuario() {
    $(".alert").alert('close');
    document.getElementById("btnguardar").innerHTML = "Crear";
    document.getElementById("titleusuario").innerHTML = "Crear usuario";

}


function ConfirmUsuario(id) {

    var result = document.getElementById('tview');
    document.getElementById('rol').value = id;

    if (id == 3) {

        document.getElementById("NumDoc").innerHTML = "Numero de ficha";
        document.getElementById("UsuName").innerHTML = "Abreviatura";
        document.getElementById('divapellido').setAttribute("hidden", "");
        document.getElementById('apellido').removeAttribute("required");
        var rol = document.getElementById('rol').value;
        document.getElementById('apellido').setAttribute("value", rol);
        document.getElementById("correolabel").innerHTML = "Nombre de usuario";
        document.getElementById('correo').setAttribute("type", "number");

    }

    const ajax = new XMLHttpRequest();
    ajax.open("POST", "main.php", true);
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) {
            if (ajax.status == 200) {
                result.innerHTML = ajax.responseText;

                $(document).ready(function() {
                    $('#tableusuario').DataTable({
                        dom: 'Bfrtip',
                        buttons: ['copy', 'excel', 'pdf', 'csv'],
                        "language": {
                            "url": "../assets/datatables/Spanish.json"
                        }
                    });
                });


            } else { console.log("Ups, Me equivoque;"); }
        }
    };
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send("ctrl=usuario&acti=seleccion&rolid=" + id);

}

function SeleccionarUsuario() {
    var result = document.getElementById('tview');

    document.getElementById("NumDoc").innerHTML = "Numero de documento";
    document.getElementById("UsuName").innerHTML = "Nombre";
    document.getElementById('divapellido').removeAttribute("hidden");
    document.getElementById('apellido').setAttribute("value", "");
    document.getElementById('apellido').setAttribute("required", "");
    document.getElementById("correolabel").innerHTML = "Correo";
    document.getElementById('correo').setAttribute("type", "email");


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
    ajax.send("ctrl=usuario&acti=recargar");
}

function VerPass() {
    if ($('#contraseña').attr('type') == 'password') {
        $('#contraseña').attr('type', 'text');
        $('#vpss').attr('src', '../assets/img/img-perfil/ojonegro.svg');
    } else {
        $('#contraseña').attr('type', 'password');
        $('#vpss').attr('src', '../assets/img/img-perfil/invisible.svg');
    }
}


function soloLetras(e) {
    var key = e.keyCode || e.which,
        tecla = String.fromCharCode(key).toLowerCase(),
        letras = " áéíóúabcdefghijklmnñopqrstuvwxyz",
        especiales = [8, 37, 39, 46],
        tecla_especial = false;

    for (var i in especiales) {
        if (key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if (letras.indexOf(tecla) == -1 && !tecla_especial) {
        return false;
    }
}