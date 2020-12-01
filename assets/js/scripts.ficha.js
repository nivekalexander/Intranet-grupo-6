function ObjAjax() {
    var xmlhttp = false;
    try { xmlhttp = new ActiveXObject("Msxml2.XMLHTTP"); } catch (e) {
        try { xmlhttp = new ActiveXObject("Microsoft.XMLHTTP"); } catch (E) { xmlhttp = false; }
    }
    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') { xmlhttp = new XMLHttpRequest(); }
    return xmlhttp;
}


function BorrarFicha(fic_id) {
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

                            $(document).ready(function() {
                                $('#tableficha').DataTable({
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
                ajax.send("ctrl=ficha&acti=eliminar&fic_id=" + fic_id);
            },
            cancel: function() {
                $.alert('Has cancelado la eliminación');
            }
        }
    });

}

function InsertarFicha() {
    var result = document.getElementById('tview');

    var fic_codigo = document.formulario.fic_codigo.value;
    var fic_feccrn = document.formulario.fic_feccrn.value;
    var fic_fecfn = document.formulario.fic_fecfn.value;
    var fic_tijid = document.formulario.fic_tijid.value;
    var fic_modid = document.formulario.fic_modid.value;
    var fic_tofid = document.formulario.fic_tofid.value;
    var fic_pfoid = document.formulario.fic_pfoid.value;

    const ajax = new XMLHttpRequest();
    ajax.open("POST", "main.php", true);
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) {
            if (ajax.status == 200) {

                result.innerHTML = ajax.responseText;

                $(document).ready(function() {
                    $('#tableficha').DataTable({
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
    ajax.send("ctrl=ficha&acti=insertar&fic_codigo=" + fic_codigo + "&fic_feccrn=" + fic_feccrn + "&fic_fecfn=" + fic_fecfn + "&fic_tijid=" + fic_tijid + "&fic_modid=" + fic_modid + "&fic_tofid=" + fic_tofid + "&fic_pfoid=" + fic_pfoid);


}



function EditarFicha( fic_codigo, fic_feccrn, fic_fecfn, fic_tijid, fic_modid, fic_tofid, fic_pfoid) {


    document.formulario.fic_codigo.value = fic_codigo;
    document.formulario.fic_feccrn.value = fic_feccrn;
    document.formulario.fic_fecfn.value = fic_fecfn;
    document.formulario.fic_tijid.value = fic_tijid;
    document.formulario.fic_modid.value = fic_modid;
    document.formulario.fic_tofid.value = fic_tofid;
    document.formulario.fic_pfoid.value = fic_pfoid;

    document.getElementById("titleficha").innerHTML = "Actualizar Ficha";
    document.getElementById("btnguardar").innerHTML = "Actualizar";
}

function UpdateFicha() {

    var result = document.getElementById('tview');

    var fic_id = document.formulario.fic_codigo.value;
    var fic_codigo = document.formulario.fic_codigo.value;
    var fic_feccrn = document.formulario.fic_feccrn.value;
    var fic_fecfn = document.formulario.fic_fecfn.value;
    var fic_tijid = document.formulario.fic_tijid.value;
    var fic_modid = document.formulario.fic_modid.value;
    var fic_tofid = document.formulario.fic_tofid.value;
    var fic_pfoid = document.formulario.fic_pfoid.value;



    const ajax = new XMLHttpRequest();
    ajax.open("POST", "main.php", true);
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) {
            if (ajax.status == 200) {
                result.innerHTML = ajax.responseText;

                $(document).ready(function() {
                    $('#tableficha').DataTable({
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
    ajax.send("ctrl=ficha&acti=actualizar&fic_id=" + fic_id + "&fic_codigo=" + fic_codigo + "&fic_feccrn=" + fic_feccrn + "&fic_fecfn=" + fic_fecfn + "&fic_tijid=" + fic_tijid + "&fic_modid=" + fic_modid + "&fic_tofid=" + fic_tofid + "&fic_pfoid=" + fic_pfoid);


    document.getElementById("btnguardar").innerHTML = "Crear";
    document.getElementById("titleficha").innerHTML = "Crear Ficha";

}

function CancelarFicha() {



    document.getElementById("titleficha").innerHTML = "Crear Ficha";
    document.getElementById("btnguardar").innerHTML = "Crear";

}