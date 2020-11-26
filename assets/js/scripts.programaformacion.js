function ObjAjax() {
    var xmlhttp = false;
    try { xmlhttp = new ActiveXObject("Msxml2.XMLHTTP"); } catch (e) {
        try { xmlhttp = new ActiveXObject("Microsoft.XMLHTTP"); } catch (E) { xmlhttp = false; }
    }
    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') { xmlhttp = new XMLHttpRequest(); }
    return xmlhttp;
}


function BorrarProgramaFormacion(id) {
    $.confirm({
        title: 'Confirmación!',
        content: '¿Esta seguro que desea eliminar este Programa de formación?',
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
                            $(document).ready(function() {
                                $('#tablaprogramaformacion').DataTable({
                                    dom: 'Bfrtip',
                                    buttons: ['copy', 'excel', 'pdf', 'csv'],
                                    "language": {
                                        "url": "../assets/datatables/Spanish.json"
                                    }
                                });
                            });

                        } else {
                            console.log("Ups, Me equivoque;");
                        }
                    }
                };

                ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                ajax.send("ctrl=programaformacion&acti=eliminar&id=" + id);
            },
            cancel: function() {
                $.alert('Has cancelado la eliminación');
            }
        }
    });

}


function InsertProgramaFormacion() {
    var result = document.getElementById('tview');


    var version = document.formprogramaformacion.version.value;
    var duracion = document.formprogramaformacion.duracion.value;
    var abreviacion = document.formprogramaformacion.abreviacion.value;
    var nombre = document.formprogramaformacion.nombre.value;
    var estado = document.getElementById('estado').value;
    var tipPrograma = document.getElementById('tipPrograma').value;



    const ajax = new XMLHttpRequest();
    ajax.open("POST", "main.php", true);
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) {
            if (ajax.status == 200) {

                result.innerHTML = ajax.responseText;

                $(document).ready(function() {
                    $('#tablaprogramaformacion').DataTable({
                        dom: 'Bfrtip',
                        buttons: ['copy', 'excel', 'pdf', 'csv'],
                        "language": {
                            "url": "../assets/datatables/Spanish.json"
                        }
                    });
                });

            } else {
                console.log("Ups, Me equivoque;");
            }
        }
    };

    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send("ctrl=programaformacion&acti=insertar&version=" + version + "&duracion=" + duracion + "&abreviacion=" + abreviacion + "&nombre=" + nombre + "&estado=" + estado + "&tipoprograma=" + tipPrograma);

    document.getElementById('formprogramaformacion').reset();
}





function EditarProgramaFormacion(id, version, duracion, abreviacion, nombre, estado, tipPrograma) {

    document.formprogramaformacion.id.value = id;

    document.formprogramaformacion.version.value = version;
    document.formprogramaformacion.duracion.value = duracion;
    document.formprogramaformacion.abreviacion.value = abreviacion;
    document.formprogramaformacion.nombre.value = nombre;
    document.getElementById('estado').value = estado;
    document.getElementById('tipPrograma').value = tipPrograma;
    $("#tipPrograma").val(tipPrograma);

    document.getElementById("btnproforma").innerHTML = "Actualizar";
    document.getElementById("titleproforma").innerHTML = "Actualizar Programa de formación";
}


function UpdateProgramaFormacion() {

    var result = document.getElementById('tview');

    var id = document.formprogramaformacion.id.value;

    var version = document.formprogramaformacion.version.value;
    var duracion = document.formprogramaformacion.duracion.value;
    var abreviacion = document.formprogramaformacion.abreviacion.value;
    var nombre = document.formprogramaformacion.nombre.value;
    var estado = document.getElementById('estado').value;
    var tipPrograma = document.getElementById('tipPrograma').value;

    document.getElementById('formprogramaformacion').reset();

    const ajax = new XMLHttpRequest();
    ajax.open("POST", "main.php", true);
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) {
            if (ajax.status == 200) {

                result.innerHTML = ajax.responseText;
                
                $(document).ready(function() {
                    $('#tablaprogramaformacion').DataTable({
                        dom: 'Bfrtip',
                        buttons: ['copy', 'excel', 'pdf', 'csv'],
                        "language": {
                            "url": "../assets/datatables/Spanish.json"
                        }
                    });
                });


            } else { console.log("Ups, Me equivoque;"); }
        }
    };
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send("ctrl=programaformacion&acti=actualizar&version=" + version + "&duracion=" + duracion + "&abreviacion=" + abreviacion + "&nombre=" + nombre + "&estado=" + estado + "&tipoprograma=" + tipPrograma + "&id=" + id);

    document.getElementById('formprogramaformacion').reset();
    document.getElementById("btnproforma").innerHTML = "Crear";
    document.getElementById("titleproforma").innerHTML = "Crear Programa de formación";

}

function CancelarProgramaFormacion() {
    document.getElementById('formprogramaformacion').reset();
    document.getElementById("btnproforma").innerHTML = "Crear";
    document.getElementById("titleproforma").innerHTML = "Crear Programa de formación";
}