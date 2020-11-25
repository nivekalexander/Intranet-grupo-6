function ObjAjax() {
    var xmlhttp = false;
    try { xmlhttp = new ActiveXObject("Msxml2.XMLHTTP"); } catch (e) {
        try { xmlhttp = new ActiveXObject("Microsoft.XMLHTTP"); } catch (E) { xmlhttp = false; }
    }
    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') { xmlhttp = new XMLHttpRequest(); }
    return xmlhttp;
}


function BorrarTipoidentificacion(id) {
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
    ajax.send("ctrl=tipoidentificacion&acti=eliminar&id=" + id);
}


function InsertTipoidentificacion() {
    var result = document.getElementById('tview');

    var tipo = document.formtipoidentificacion.tipo.value;

    document.getElementById("formtipoidentificacion").reset();

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
    ajax.send("ctrl=tipoidentificacion&acti=insertar&tipo=" + tipo);
}





function EditarTipoidentificacion(id, tipo) {
    document.formtipoidentificacion.tipo.value = tipo;
    document.formtipoidentificacion.id.value = id;



    document.getElementById("btntipid").innerHTML = "Actualizar";
    document.getElementById("btntipid").setAttribute("onclick", "UpdateTipoidentificacion();");

}


function UpdateTipoidentificacion() {

    var result = document.getElementById('tview');

    var tipo = document.formtipoidentificacion.tipo.value;
    var id = document.formtipoidentificacion.id.value;



    const ajax = new XMLHttpRequest();
    ajax.open("POST", "main.php", true);
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) {
            if (ajax.status == 200) {
                result.innerHTML = ajax.responseText;
                document.getElementById("btntipid").innerHTML = "Crear";

            } else { console.log("Ups, Me equivoque;"); }
        }
    };
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    ajax.send("ctrl=tipoidentificacion&acti=actualizar&tipo=" + tipo + "&id=" + id);
    document.getElementById("btntipid").setAttribute("onClick", "InsertTipoidentificacion();");

    document.getElementById("formtipoidentificacion").reset();
}

function CancelarTipoIdentificacion() {
    document.getElementById('formtipoidentificacion').reset();
    document.getElementById("btntipid").innerHTML = "Crear";
}