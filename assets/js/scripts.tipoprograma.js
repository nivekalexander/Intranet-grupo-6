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

    var nombrepro = document.formulario.nombre.value;


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


}





function EditarTipoPrograma(id, nombrepro) {

    document.formulario.id.value = id;
    document.formulario.nombre.value = nombrepro;

    document.getElementById("btnguardar").innerHTML = "Actualizar";
    document.getElementById("titletipprograma").innerHTML = "Actualizar tipo de programa";


}


function UpdateTipoPrograma() {

    var result = document.getElementById('tview');

    var nombrepro = document.formulario.nombre.value;
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
    ajax.send("ctrl=tipoprograma&acti=actualizar&nombre=" + nombrepro + "&id=" + id);



    document.getElementById("btnguardar").innerHTML = "Crear";
    document.getElementById("titletipprograma").innerHTML = "Crear tipo de programa";

}

function CancelarTipoPrograma() {

    document.getElementById("btnguardar").innerHTML = "Crear";
    document.getElementById("titletipprograma").innerHTML = "Crear tipo de programa";
}