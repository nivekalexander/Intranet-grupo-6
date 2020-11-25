function ObjAjax() {
    var xmlhttp = false;
    try { xmlhttp = new ActiveXObject("Msxml2.XMLHTTP"); } catch (e) {
        try { xmlhttp = new ActiveXObject("Microsoft.XMLHTTP"); } catch (E) { xmlhttp = false; }
    }
    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') { xmlhttp = new XMLHttpRequest(); }
    return xmlhttp;
}


function BorrarRol(id) {
    $.confirm({
        title: 'Confirmación!',
        content: '¿Esta seguro que desea eliminar este rol?',
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
                ajax.send("ctrl=rol&acti=eliminar&id=" + id);
            },
            cancel: function() {
                $.alert('Has cancelado la eliminación');
            }
        }
    });

}


function InsertRol() {
    var result = document.getElementById('tview');

    var nombrerol = document.formrol.nombre.value;


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
    ajax.send("ctrl=rol&acti=insertar&nombre=" + nombrerol);

    document.getElementById('formrol').reset();
}





function EditarRol(id, nombrerol) {

    document.formrol.id.value = id;
    document.formrol.nombre.value = nombrerol;

    document.getElementById("btn-rol").innerHTML = "Actualizar";
    document.getElementById("titlerol").innerHTML = "Actualizar Rol";


}


function UpdateRol() {

    var result = document.getElementById('tview');

    var nombrerol = document.formrol.nombre.value;
    var id = document.formrol.id.value;

    document.getElementById('formrol').reset();

    const ajax = new XMLHttpRequest();
    ajax.open("POST", "main.php", true);
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) {
            if (ajax.status == 200) {
                result.innerHTML = ajax.responseText;
                document.getElementById("btn-rol").innerHTML = "Crear";

            } else { console.log("Ups, Me equivoque;"); }
        }
    };
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send("ctrl=rol&acti=actualizar&nombre=" + nombrerol + "&id=" + id);

    document.getElementById('formrol').reset();

}

function CancelarRol() {
    document.getElementById('formrol').reset();
    document.getElementById("btn-rol").innerHTML = "Crear";
    document.getElementById("titlerol").innerHTML = "Crear Rol";
}