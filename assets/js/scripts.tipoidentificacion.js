function ObjAjax() {
    var xmlhttp = false;
    try { xmlhttp = new ActiveXObject("Msxml2.XMLHTTP"); } catch (e) {
        try { xmlhttp = new ActiveXObject("Microsoft.XMLHTTP"); } catch (E) { xmlhttp = false; }
    }
    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') { xmlhttp = new XMLHttpRequest(); }
    return xmlhttp;
}

function BorrarTipoidentificacion(id) {
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
                ajax.send("ctrl=tipoidentificacion&acti=eliminar&id=" + id);
            },
            cancel: function() {
                $.alert('Has cancelado la eliminación');
            }
        }
    });

}

function InsertTipoidentificacion() {
    var result = document.getElementById('tview');

    var tipo = document.formulario.tipo.value;

     

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

    document.formulario.tipo.value = tipo;
    document.formulario.id.value = id;

    document.getElementById("titletipid").innerHTML = "Actualizar Tipo Identificación";
    document.getElementById("btnguardar").innerHTML = "Actualizar";
}


function UpdateTipoidentificacion() {

    var result = document.getElementById('tview');

    var tipo = document.formulario.tipo.value;
    var id = document.formulario.id.value;



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

    ajax.send("ctrl=tipoidentificacion&acti=actualizar&tipo=" + tipo + "&id=" + id);

     

    document.getElementById("btnguardar").innerHTML = "Crear";
    document.getElementById("titletipid").innerHTML = "Crear Nueva Identificacion";
}

function CancelarTipoIdentificacion() {
     
    document.getElementById("btnguardar").innerHTML = "Crear";
    document.getElementById("titletipid").innerHTML = "Crear Nueva Identificacion";
}