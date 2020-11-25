function ObjAjax() {
    var xmlhttp = false;
    try { xmlhttp = new ActiveXObject("Msxml2.XMLHTTP"); } catch (e) {
        try { xmlhttp = new ActiveXObject("Microsoft.XMLHTTP"); } catch (E) { xmlhttp = false; }
    }
    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') { xmlhttp = new XMLHttpRequest(); }
    return xmlhttp;
}


function BorrarTipoJornada(id) {
    $.confirm({
        title: 'Confirmación!',
        content: '¿Esta seguro que desea eliminar este tipo de jornada?',
        buttons: {
            confirm: function() {
                $.alert('Se ha eliminado correctamente');

                var result = document.getElementById('tview');

                const ajax = new ObjAjax();
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
                ajax.send("ctrl=tipojornada&acti=eliminar&id=" + id);
            },
            cancel: function() {
                $.alert('Has cancelado la eliminación');
            }
        }
    });

}


function InsertTipoJornada() {
    var result = document.getElementById('tview');

    var nombrejor = document.formtipojornada.nombre.value;


    const ajax = new ObjAjax();
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
    ajax.send("ctrl=tipojornada&acti=insertar&nombre=" + nombrejor);

    document.getElementById('formtipojornada').reset();
}





function EditarTipoJornada(id, nombrejor) {

    document.formtipojornada.id.value = id;
    document.formtipojornada.nombre.value = nombrejor;

    document.getElementById("btn-tipo-jornada").innerHTML = "Actualizar";

}


function UpdateTipoJornada() {

    var result = document.getElementById('tview');

    var nombrejor = document.formtipojornada.nombre.value;
    var id = document.formtipojornada.id.value;

    document.getElementById('formtipojornada').reset();

    const ajax = new ObjAjax();
    ajax.open("POST", "main.php", true);
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) {
            if (ajax.status == 200) {
                result.innerHTML = ajax.responseText;
                document.getElementById("btn-tipo-jornada").innerHTML = "Crear";

            } else { console.log("Ups, Me equivoque;"); }
        }
    };
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send("ctrl=tipojornada&acti=actualizar&nombre=" + nombrejor + "&id=" + id);

    document.getElementById('formtipojornada').reset();

}

function CancelarTipoJornada() {
    document.getElementById('formtipojornada').reset();
    document.getElementById("btn-tipo-jornada").innerHTML = "Crear";
}