function ObjAjax() {
    var xmlhttp = false;
    try { xmlhttp = new ActiveXObject("Msxml2.XMLHTTP"); } catch (e) {
        try { xmlhttp = new ActiveXObject("Microsoft.XMLHTTP"); } catch (E) { xmlhttp = false; }
    }
    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') { xmlhttp = new XMLHttpRequest(); }
    return xmlhttp;
}


function BorrarUsuario(id, rolid, idfichausuario) {
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
    ajax.send("ctrl=usuario&acti=insertar&id=" + id + "&nombre=" + nombre + "&apellido=" + apellido + "&contraseña=" + contraseña + "&correo=" + correo + "&rol=" + rol + "&estado=" + estado + "&identi=" + identi);

}





function EditarUsuario(id, nombre, apellido, contraseña, correo, rol, estado, identi) {

    document.formulario.id.value = id;
    document.formulario.validationid.value = id;
    document.formulario.nombre.value = nombre;
    document.formulario.apellido.value = apellido;
    document.formulario.contraseña.value = "";
    document.formulario.correo.value = correo;

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
    ajax.send("ctrl=usuario&acti=actualizar&nombre=" + nombre + "&apellido=" + apellido + "&contraseña=" + contraseña + "&correo=" + correo + "&rol=" + rol + "&estado=" + estado + "&identi=" + identi + "&id=" + id + "&valid=" + valid);

    document.getElementById('rol').value = rol;

    document.getElementById("titleusuario").innerHTML = "Crear usuario";
}

function CancelarUsuario() {
    $(".alert").alert('close');
    document.getElementById("btnguardar").innerHTML = "Crear";
    document.getElementById("titleusuario").innerHTML = "Crear usuario";

}


//codigo para agregar una ficha//
function AgregarFicha(idusu) {

    document.getElementById("usuariofichaagregar").value = idusu;  

}

function AgregarCancelar() {

    document.getElementById("usuariofichaagregar").value = "";

}

function AgregarFichaConfirmar() {

    var result = document.getElementById('tview');

    var idusu = document.getElementById("usuariofichaagregar").value;
    var ficha = document.getElementById("fichaagregar").value;

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
    ajax.send("ctrl=usuario&acti=agregarficha&ficha=" + ficha + "&idusu=" + idusu);


}

function EliminarFicha(usu_numdnt) {


    document.getElementById("usuariofichaeliminar").value = usu_numdnt;



}

function EliminarCancelar() {

    document.getElementById("fichaeliminar").value = "";
    document.getElementById("fichaeliminar").value = "";


}

function EliminarFichaConfirmar() {

    var result = document.getElementById('tview');

    var idusu = document.getElementById("usuariofichaeliminar").value;
    var ficha = document.getElementById("fichaeliminar").value;

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
    ajax.send("ctrl=usuario&acti=eliminarficha&ficha=" + ficha + "&idusu=" + idusu);

}

//Fin codigo para agregar una ficha//


function ConfirmUsuario(id) {

    var result = document.getElementById('tview');
    document.getElementById('rol').value = id;

    if (id == 3) {

        document.getElementById('NumDoc').innerHTML = "Numero identificador de ficha";
        document.getElementById('UsuName').innerHTML = "Nombre Abreviatura";
        document.getElementById('Last').innerHTML = "Numero ficha";
        document.getElementById('apellido').removeAttribute("onkeypress");
        document.getElementById('correolabel').innerHTML = "Nombre de usuario";
        document.getElementById('correo').setAttribute("type", "text");
        document.getElementById('divtipid').setAttribute("hidden", "");
        document.getElementById("errorid").innerHTML = "Ingrese un Número identificador de ficha";
        document.getElementById("errorname").innerHTML = "Ingrese un Nombre Abreviatura";
        document.getElementById("errorlast").innerHTML = "Ingrese un Numero ficha";
        document.getElementById("errorpass").innerHTML = "Ingrese una Contraseña";
        document.getElementById("erroremail").innerHTML = "Introduzca un Nombre de usuario.";
        document.getElementById("errorestado").innerHTML = "Seleccione un Campo.";

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
    document.getElementById('Last').innerHTML = "Apellido";
    document.getElementById('apellido').setAttribute("onkeypress", "return soloLetras(event)");
    document.getElementById("correolabel").innerHTML = "Correo";
    document.getElementById('correo').setAttribute("type", "email");
    document.getElementById('divtipid').removeAttribute("hidden");
    document.getElementById("errorid").innerHTML = "Ingrese un Número de Documento";
    document.getElementById("errorname").innerHTML = "Ingrese un Nombre";
    document.getElementById("errorlast").innerHTML = "Ingrese un Apellido";
    document.getElementById("errorpass").innerHTML = "Ingrese una Contraseña";
    document.getElementById("erroremail").innerHTML = "Introduzca una Dirección de Correo Valida.";
    document.getElementById("errorestado").innerHTML = "Seleccione un Campo.";



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