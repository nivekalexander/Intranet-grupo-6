function ObjAjax() {
    var xmlhttp = false;
    try { xmlhttp = new ActiveXObject("Msxml2.XMLHTTP"); } catch (e) {
        try { xmlhttp = new ActiveXObject("Microsoft.XMLHTTP"); } catch (E) { xmlhttp = false; }
    }
    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') { xmlhttp = new XMLHttpRequest(); }
    return xmlhttp;
}

function BorrarTipoOferta(id) {
    $.confirm({
        title: 'Confirmación!',
        content: '¿Esta seguro que desea eliminar este tipo de programa de formación?',
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

                        } else {
                            console.log("Ups, Me equivoque;");
                        }
                    }
                };

                ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                ajax.send("ctrl=tipooferta&acti=eliminar&id=" + id);
            },
            cancel: function() {
                $.alert('Has cancelado la eliminación');
            }
        }
    });

}

function InsertarTipoOferta() {
    var result = document.getElementById('tview');

    var nombre = document.formtipooferta.nombre.value;


    const ajax = new XMLHttpRequest();
    ajax.open("POST", "main.php", true);
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) {
            if (ajax.status == 200) {

                result.innerHTML = ajax.responseText;

            } else {
                console.log("Ups, Me equivoque;");
            }
        }
    };

    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send("ctrl=tipooferta&acti=insertar&nombre=" + nombre);

    document.getElementById('formtipooferta').reset();
}



function EditarTipoOferta(id, nombre) {

    document.formtipooferta.id.value = id;
    document.formtipooferta.nombre.value = nombre;

    document.getElementById("titletipoferta").innerHTML = "Actualizar tipo de oferta";
    document.getElementById("btnguardar").innerHTML = "Actualizar";

}

function UpdateTipoOferta() {

    var result = document.getElementById('tview');

    var nombre = document.formtipooferta.nombre.value;
    var id = document.formtipooferta.id.value;

    document.getElementById('formtipooferta').reset();

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
    ajax.send("ctrl=tipooferta&acti=actualizar&nombre=" + nombre + "&id=" + id);



}

function CancelarTipoOferta() {

    document.getElementById("titletipoferta").innerHTML = "Crear tipo de oferta";
    document.getElementById('formtipooferta').reset();
    document.getElementById("btnguardar").innerHTML = "Crear";
}