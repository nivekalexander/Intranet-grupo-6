function ObjAjax() {
    var xmlhttp = false;
    try { xmlhttp = new ActiveXObject("Msxml2.XMLHTTP"); } catch (e) {
        try { xmlhttp = new ActiveXObject("Microsoft.XMLHTTP"); } catch (E) { xmlhttp = false; }
    }
    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') { xmlhttp = new XMLHttpRequest(); }
    return xmlhttp;
}
function FasesMaterialApoyo(fase){

    var fcpt=document.getElementById("fichapuntero").value;

   

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
                ajax.send("ctrl=materialapoyo&acti=faseconfirmar&fase="+fase+"&fcpt="+fcpt);

}



function BorrarMaterialApoyo(id, url) {
    $.confirm({
        title: 'Confirmación!',
        content: '¿Esta seguro que desea eliminar este material de apoyo?',
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

                        } else {
                            console.log("Ups, Me equivoque;");
                        }
                    }
                };

                ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                ajax.send("ctrl=materialapoyo&acti=eliminar&id=" + id + "&url=" + url);
            },
            Cancelar: function() {
                $.alert('Has cancelado la eliminación');
            }
        }
    });

}


function InsertMaterialApoyo() {

    var paquete = new FormData();
    paquete.append('archivo', $('#file-archivo')[0].files[0]);

    var destino = "main.php?ctrl=materialapoyo&acti=insertar";
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
     
}

var urlEdit;

function EditarMaterialApoyo(id, url) {

    $.confirm({
        title: 'Confirmación!',
        content: '¿Esta seguro que desea editar este material de apoyo?',
        buttons: {
            Confirmar: function() {
                urlEdit = url;
                
                document.getElementById("btnguardar").innerHTML = "Actualizar";

                $("#modalmaterialapoyo").modal("show");

                document.getElementById("titlematerialapoyo").innerHTML = "Actualizar Material De Apoyo";
            },
            Cancelar: function() {
                $.alert('Has cancelado la edición');
            }
        }
    });
}


function UpdateMaterialApoyo() {

    //var result = document.getElementById('tview');
    var id = document.formulario.idnews.value;

    var paquete = new FormData();
    paquete.append('archivo', $('#file-news')[0].files[0]);

    var destino = "main.php?ctrl=materialapoyo&acti=actualizar&id=" + id + "&url=" + urlEdit;
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
    $('#modalmaterialapoyo').modal('hide');
     

    document.getElementById("btnguardar").innerHTML = "Subir";
    document.getElementById("titlematerialapoyo").innerHTML = "Subir Material De Apoyo";
    urlEdit = "";
}



function CancelarMaterialApoyo() {
     
    document.getElementById("titlematerialapoyo").innerHTML = "Subir Material De Apoyo";
}

