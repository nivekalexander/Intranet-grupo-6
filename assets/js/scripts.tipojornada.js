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

    var nombrejor = document.formulario.nombre.value;


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

  
}





function EditarTipoJornada(id, nombrejor) {

    document.formulario.id.value = id;
    document.formulario.nombre.value = nombrejor;

    document.getElementById("btnguardar").innerHTML = "Actualizar";
    document.getElementById("titletipjornada").innerHTML = "Actualizar tipo de jornada";

}


function UpdateTipoJornada() {

    var result = document.getElementById('tview');

    var nombrejor = document.formulario.nombre.value;
    var id = document.formulario.id.value;

     

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
    ajax.send("ctrl=tipojornada&acti=actualizar&nombre=" + nombrejor + "&id=" + id);

     

    document.getElementById("btnguardar").innerHTML = "Crear";
    document.getElementById("titletipjornada").innerHTML = "Crear tipo de jornada";

}

function CancelarTipoJornada() {
     
    document.getElementById("btnguardar").innerHTML = "Crear";
    document.getElementById("titletipjornada").innerHTML = "Crear tipo de jornada";
}