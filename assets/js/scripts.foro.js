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
    var fchini = document.formulario.fchini.value;
    var ficid  = 2; // >>>>>> INSERTAR FORO PARA LA FICHA 2 <<<<<<<

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
    ajax.send("ctrl=foro&acti=insertar&titulo=" + titulo + "&descrp=" + descrp + "&fchfin=" + fchfin + "&fhcini=" + fchini + "&ficid=" + ficid);

}

function CancelarForo(){

    // document.getElementById("ModalLabelArchivo").innerHTML = "Subir Archivo"; 
    document.getElementById("subir-for").innerHTML = "Subir";               
}