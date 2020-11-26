function ObjAjax() {
    var xmlhttp = false;
    try { xmlhttp = new ActiveXObject("Msxml2.XMLHTTP"); } catch (e) {
        try { xmlhttp = new ActiveXObject("Microsoft.XMLHTTP"); } catch (E) { xmlhttp = false; }
    }
    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') { xmlhttp = new XMLHttpRequest(); }
    return xmlhttp;
}


function BorrarHorario(id, url) {
    $.confirm({
        title: 'Confirmación!',
        content: '¿Esta seguro que desea eliminar este horario?',
        buttons: {
            Confirmar: function() {
                $.alert('Se ha eliminado correctamente');

                var result = document.getElementById('tview');

                const ajax = new XMLHttpRequest();
                ajax.open("POST", "main.php", true);
                ajax.onreadystatechange = function() {
                    if (ajax.readyState == 4) {
                        if (ajax.status == 200) {

                            result.innerHTML = ajax.responseText;
                            document.getElementById("crearhorario").innerHTML = "Crear Horario";
                            document.getElementById("ModalLabelArchivo").innerHTML = "Subir Archivo";
                            document.getElementById("subir-hor").innerHTML = "Subir";
                            document.formhorario.reset();

                        } else {
                            console.log("Ups, Me equivoque;");
                        }
                    }
                };

                ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                ajax.send("ctrl=horario&acti=eliminar&id=" + id + "&url=" + url);
            },
            Cancelar: function() {
                $.alert('Has cancelado la eliminación');
            }
        }
    });

}


function GestionarHorario() {

    $botonHorario = document.getElementById("crearhorario").innerHTML;

    if ($botonHorario == "Crear Horario") {
        $("#horarioModal").modal("show");
    }
    if ($botonHorario == "Actualizar horario") {
        $("#actualizar-horario").click();
    }
}

function InsertHorario() {

    var paquete = new FormData();
    trinum = document.formhorario.trinum.value;
    triini = document.formhorario.fchinicio.value;
    trifin = document.formhorario.fchfin.value;
    fichaid = "2"; // >>>>>>>>> CAMBIAR ESTE VALOR CUANDO SE OBTENGA LA FICHA <<<<<<<<< 

    paquete.append('archivo', $('#file')[0].files[0]);
    paquete.append('triini', triini);
    paquete.append('trifin', trifin);
    paquete.append('trinum', trinum);
    paquete.append('fichaid', fichaid);

    var destino = "main.php?ctrl=horario&acti=insertar";
    $.ajax({
        url: destino,
        type: 'POST',
        contentType: false,
        data: paquete,
        processData: false,
        cache: false,
        success: function(resultado) {
            document.getElementById('tview').innerHTML = resultado;
            document.getElementById("crearhorario").innerHTML = "Actualizar horario";
        },
        error: function() {
            alert('Algo anda mal');
        }
    });
    
}

var urlEdit;

function EditarHorario(id, url, triini, trifin, trinum, fichaid) {
    $.confirm({
        title: 'Confirmación!',
        content: '¿Esta seguro que desea editar este horario?',
        buttons: {
            Confirmar: function() {
                urlEdit = url;
                document.formhorario.id.value = id;
                document.formhorario.trinum.value = trinum;
                document.formhorario.fchinicio.value = triini;
                document.formhorario.fchfin.value = trifin;
                document.formhorario.idficha.value = fichaid;
                document.getElementById("ModalLabelArchivo").innerHTML = "Actualizar Archivo";
                document.getElementById("subir-hor").innerHTML = "Actualizar";

                $("#horarioModal").modal("show");
            },
            Cancelar: function() {}
        }
    });
}

function UpdateHorario() {

    var paquete = new FormData();

    var id = document.formhorario.id.value;
    var trinum = document.formhorario.trinum.value;
    var triini = document.formhorario.fchinicio.value;
    var trifin = document.formhorario.fchfin.value;

    paquete.append('archivo', $('#file')[0].files[0]);
    paquete.append('id', id);
    paquete.append('url', urlEdit);
    paquete.append('triini', triini);
    paquete.append('trifin', trifin);
    paquete.append('trinum', trinum);

    var destino = "main.php?ctrl=horario&acti=actualizar";
    $.ajax({
        url: destino,
        type: 'POST',
        contentType: false,
        data: paquete,
        processData: false,
        cache: false,
        success: function(resultado) {
            document.getElementById('tview').innerHTML = resultado;
        },
        error: function() {
            alert('Algo anda mal');
        }
    });
    $('#noticiaModal').modal('hide');
    document.getElementById("ModalLabelArchivo").innerHTML = "Subir Archivo";
    document.getElementById("subir-hor").innerHTML = "Subir";

    urlEdit = "";  
}



function CancelarHorario() {
    document.getElementById("ModalLabelArchivo").innerHTML = "Subir Archivo"; 
    document.getElementById("subir-hor").innerHTML = "Subir";               
}