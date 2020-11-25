function ObjAjax() {
    var xmlhttp = false;
    try { xmlhttp = new ActiveXObject("Msxml2.XMLHTTP"); } catch (e) {
        try { xmlhttp = new ActiveXObject("Microsoft.XMLHTTP"); } catch (E) { xmlhttp = false; }
    }
    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') { xmlhttp = new XMLHttpRequest(); }
    return xmlhttp;
}


function BorrarTipoPrograma(id) {
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
                ajax.send("ctrl=tipoprograma&acti=eliminar&id=" + id);
            },
            cancel: function() {
                $.alert('Has cancelado la eliminación');
            }
        }
    });

}


function InsertTipoPrograma() {
    var result = document.getElementById('tview');

    var nombrepro = document.formtipoprograma.nombre.value;


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
    ajax.send("ctrl=tipoprograma&acti=insertar&nombre=" + nombrepro);

    document.getElementById('formtipoprograma').reset();
}





function EditarTipoPrograma(id, nombrepro) {

    document.formtipoprograma.id.value = id;
    document.formtipoprograma.nombre.value = nombrepro;

    document.getElementById("btn-tipo-programa").innerHTML = "Actualizar";

}


function UpdateTipoPrograma() {

    var result = document.getElementById('tview');

    var nombrepro = document.formtipoprograma.nombre.value;
    var id = document.formtipoprograma.id.value;

    document.getElementById('formtipoprograma').reset();

    const ajax = new XMLHttpRequest();
    ajax.open("POST", "main.php", true);
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) {
            if (ajax.status == 200) {
                result.innerHTML = ajax.responseText;
                document.getElementById("btn-tipo-programa").innerHTML = "Crear";

            } else { console.log("Ups, Me equivoque;"); }
        }
    };
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send("ctrl=tipoprograma&acti=actualizar&nombre=" + nombrepro + "&id=" + id);

    document.getElementById('formtipoprograma').reset();

}

function CancelarTipoPrograma() {
    document.getElementById('formtipoprograma').reset();
    document.getElementById("btn-tipo-programa").innerHTML = "Crear";
}