function ObjAjax() {
    var xmlhttp = false;
    try { xmlhttp = new ActiveXObject("Msxml2.XMLHTTP"); } catch (e) {
        try { xmlhttp = new ActiveXObject("Microsoft.XMLHTTP"); } catch (E) { xmlhttp = false; }
    }
    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') { xmlhttp = new XMLHttpRequest(); }
    return xmlhttp;
}


function BorrarModalidad(id) {
    $.confirm({
        title: 'Confirmación!',
        content: '¿Esta seguro que desea eliminar esta modalidad?',
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
                ajax.send("ctrl=modalidad&acti=eliminar&id=" + id);
            },
            cancel: function() {
                $.alert('Has cancelado la eliminación');
            }
        }
    });

}


function InsertModalidad() {
    var result = document.getElementById('tview');

    var nombremodalidad = document.formmodalidad.nombre.value;


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
    ajax.send("ctrl=modalidad&acti=insertar&nombre=" + nombremodalidad);

    document.getElementById('formmodalidad').reset();
}





function EditarModalidad(id, nombremodalidad) {

    document.formmodalidad.id.value = id;
    document.formmodalidad.nombre.value = nombremodalidad;

    document.getElementById("btn-modalidad").innerHTML = "Actualizar";
    document.getElementById("titlemodalidad").innerHTML = "Actualizar modalidad";
}


function UpdateModalidad() {

    var result = document.getElementById('tview');

    var nombremodalidad = document.formmodalidad.nombre.value;
    var id = document.formmodalidad.id.value;

    document.getElementById('formmodalidad').reset();

    const ajax = new ObjAjax();
    ajax.open("POST", "main.php", true);
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) {
            if (ajax.status == 200) {
                result.innerHTML = ajax.responseText;
                

            } else { console.log("Ups, Me equivoque;"); }
        }
    };
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send("ctrl=modalidad&acti=actualizar&nombre=" + nombremodalidad + "&id=" + id);

    document.getElementById("btn-modalidad").innerHTML = "Crear";
    document.getElementById("titlemodalidad").innerHTML = "Crear modalidad";
    document.getElementById('formmodalidad').reset();

}

function CancelarModalidad() {
    document.getElementById('formmodalidad').reset();
    document.getElementById("btn-modalidad").innerHTML = "Crear";
    document.getElementById("titlemodalidad").innerHTML = "Crear modalidad";
}