function ObjAjax() {
    var xmlhttp = false;
    try { xmlhttp = new ActiveXObject("Msxml2.XMLHTTP"); } catch (e) {
        try { xmlhttp = new ActiveXObject("Microsoft.XMLHTTP"); } catch (E) { xmlhttp = false; }
    }
    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') { xmlhttp = new XMLHttpRequest(); }
    return xmlhttp;
}

function InsertForo() {

    var result = document.getElementById('tview');

    var titulo = document.formulario.titulo.value;
    var descrp = document.formulario.descrp.value;
    var fchfin = document.formulario.fchfin.value;
    
    var ficid = document.formulario.idficha.value;
    var idusu = document.formulario.idusuario.value;

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
    ajax.send("ctrl=foro&acti=insertar&titulo=" + titulo + "&descrp=" + descrp + "&fchfin=" + fchfin + "&ficid=" + ficid +"&idusu="+idusu);

}

function BorrarForo(id) {
    $.confirm({
        title: 'Confirmación!',
        content: '¿Esta seguro que desea eliminar este foro?',
        buttons: {
            confirmar: function() {
                $.alert('Se ha eliminado correctamente');

                var result = document.getElementById('tview');
                var ficid = document.formulario.idficha.value;

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
                ajax.send("ctrl=foro&acti=eliminar&id=" + id + "&ficid=" + ficid);
            },
            cancelar: function() {
                $.alert('Has cancelado la eliminación');
            }
        }
    });
}

function EditarForo(id, titulo, fchfin, fchini, descrp,idusu) {
    $.confirm({
        title: 'Confirmación!',
        content: '¿Desea editar este foro?',
        buttons: {
            confirmar: function() {

                document.formulario.id.value = id;
                document.formulario.id.value = id;
                document.formulario.titulo.value = titulo;
                document.formulario.descrp.value = descrp;
                document.formulario.fchfin.value = fchfin;
                document.formulario.idusuario.value = idusu;

                document.getElementById("btnguardar").innerHTML = "Actualizar";
                document.getElementById("ModalLabelForo").innerHTML = "Editar Foro";
                $('#foroModal').modal('show');
            },
            cancelar: function() {}
        }
    });
}

function UpdateForo() {

    var result = document.getElementById('tview');

    var id = document.formulario.id.value;
    var titulo = document.formulario.titulo.value;
    var descrp = document.formulario.descrp.value;
    var fchfin = document.formulario.fchfin.value;
    
    var ficid = document.formulario.idficha.value;
    var idusu = document.formulario.idusuario.value;

    const ajax = new ObjAjax();
    ajax.open("POST", "main.php", true);
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) {
            if (ajax.status == 200) {

                result.innerHTML = ajax.responseText;
                document.getElementById("btnguardar").innerHTML = "Crear";
                document.getElementById("ModalLabelForo").innerHTML = "Crear Foro";

            } else { console.log("Ups, Me equivoque;"); }
        }
    };
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send("ctrl=foro&acti=actualizar&titulo=" + titulo + "&descrp=" + descrp + "&fchfin=" + fchfin + "&ficid=" + ficid + "&id=" + id,"&idusu="+idusu);
}

function ParticiparForo(id, titulo, fchfin, fchini, descrp,idusu) {

    var result = document.getElementById("contenedorForo");
    var ficid = document.formulario.idficha.value;

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
    ajax.send("ctrl=comentario&titulo=" + titulo + "&descrp=" + descrp +"&fchini="+fchini+ "&fchfin=" + fchfin + "&ficid=" + ficid + "&id=" + id+"&idusu="+idusu);



}

function CancelarForo() {

    document.getElementById("ModalLabelForo").innerHTML = "Crear Foro";
    document.getElementById("btnguardar").innerHTML = "Subir";
}