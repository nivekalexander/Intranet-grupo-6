function ObjAjax() {
    var xmlhttp = false;
    try { xmlhttp = new ActiveXObject("Msxml2.XMLHTTP"); } catch (e) {
        try { xmlhttp = new ActiveXObject("Microsoft.XMLHTTP"); } catch (E) { xmlhttp = false; }
    }
    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') { xmlhttp = new XMLHttpRequest(); }
    return xmlhttp;
}

function InsertComentario() {
    var result = document.getElementById('tview');

    var respst = document.formularioColl.ccomentario.value;
    var perprt = document.formularioColl.cnombre.value;
    var forid = document.formularioColl.forid.value;

    if(!perprt == ""){
        if(!respst == ""){
            
            const ajax = new ObjAjax();
            ajax.open("POST", "main.php", true);
            ajax.onreadystatechange = function() {
                if (ajax.readyState == 4) {
                    if (ajax.status == 200) {
        
                        result.innerHTML = ajax.responseText;
                        document.formularioColl.reset();
                        $("form").removeClass('was-validated');
                        $('#comentarioInsert').collapse('hide');
        
                    } else {
                        console.log("Ups, Me equivoque;");
                    }
                }
            };
        
            ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            ajax.send("ctrl=comentario&acti=insertar&respst=" + respst + "&perprt=" + perprt + "&id=" + forid);    

        
        }else{
            $.alert("Escriba su comentario");        
        }
    }else{
        $.alert("Escriba su nombre");        
    }          

}

function BorrarComentario(id){
    $.confirm({
        title: 'Confirmación!',
        content: '¿Desea eliminar este comentario?',
        buttons: {
            confirmar: function() {
                $.alert('Se ha eliminado correctamente');

                var result = document.getElementById('tview');
                var forid = document.formularioColl.forid.value;

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
                ajax.send("ctrl=comentario&acti=eliminar&comid=" + id + "&id=" + forid);
            },
            cancelar: function() {
                
            }
        }
    });
}

function EditarComentario(comid){    

    var campoText = "#ecomentario"+comid;
    var textRespt = "#mcomentario"+comid;
    var btnComent = "#btncomentar"+comid;
                    
    $(campoText).removeAttr("hidden");
    $(textRespt).attr("style","display: none;");
    $(btnComent).attr("onclick","UpdateComentario("+comid+");");
    document.getElementById("btncomentar"+comid).innerHTML = "Actualizar";

}

function UpdateComentario(comid){

    var result = document.getElementById('tview');
    var ccomentario = document.getElementById("ecomentario"+comid).value;
    var forid = document.formularioColl.forid.value;

    if(!ccomentario == ""){
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
        ajax.send("ctrl=comentario&acti=actualizar&comid="+comid+"&respst="+ccomentario+"&id="+forid);
    }else{
        $.alert("No puede actualizar su comentario vacio");   
    }
    
}

function CleanCom() {
    document.formularioColl.reset();
    $("form").removeClass('was-validated');
}
