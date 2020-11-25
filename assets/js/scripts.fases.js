function ObjAjax() {
    var xmlhttp = false;
    try { xmlhttp = new ActiveXObject("Msxml2.XMLHTTP"); } catch (e) {
        try { xmlhttp = new ActiveXObject("Microsoft.XMLHTTP"); } catch (E) { xmlhttp = false; }
    }
    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') { xmlhttp = new XMLHttpRequest(); }
    return xmlhttp;
}


function BorrarFases(id) {
    $.confirm({
        title: 'Confirmación!',
        content: '¿Esta seguro que desea eliminar esta fase?',
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
                ajax.send("ctrl=fases&acti=eliminar&id=" + id);
            },
            cancel: function() {
                $.alert('Has cancelado la eliminación');
            }
        }
    });

}


function InsertFases() {
    var result = document.getElementById('tview');

    var nombrefases = document.formfases.nombre.value;


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
    ajax.send("ctrl=fases&acti=insertar&nombre=" + nombrefases);

    document.getElementById('formfases').reset();
}





function EditarFases(id, nombrefases) {

    document.formfases.id.value = id;
    document.formfases.nombre.value = nombrefases;

    document.getElementById("btn-fases").innerHTML = "Actualizar";
    document.getElementById("titlefase").innerHTML = "Actualizar fase";
}


function UpdateFases() {

    var result = document.getElementById('tview');

    var nombrefases = document.formfases.nombre.value;
    var id = document.formfases.id.value;

    document.getElementById('formfases').reset();

    const ajax = new ObjAjax();
    ajax.open("POST", "main.php", true);
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) {
            if (ajax.status == 200) {
                result.innerHTML = ajax.responseText;
                document.getElementById("btn-fases").innerHTML = "Crear";

            } else { console.log("Ups, Me equivoque;"); }
        }
    };
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send("ctrl=fases&acti=actualizar&nombre=" + nombrefases + "&id=" + id);

    document.getElementById('formfases').reset();

}

function CancelarFases() {
    document.getElementById('formfases').reset();
    document.getElementById("btn-fases").innerHTML = "Crear";
    document.getElementById("titlefase").innerHTML = "Crear fase";
}