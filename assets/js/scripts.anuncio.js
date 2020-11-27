	function ObjAjax() {
	    var xmlhttp = false;
	    try { xmlhttp = new ActiveXObject("Msxml2.XMLHTTP"); } catch (e) {
	        try { xmlhttp = new ActiveXObject("Microsoft.XMLHTTP"); } catch (E) { xmlhttp = false; }
	    }
	    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') { xmlhttp = new XMLHttpRequest(); }
	    return xmlhttp;
	}


	function BorrarAnuncio(id) {
	    $.confirm({
	        title: 'Confirmación!',
	        content: '¿Esta seguro que desea eliminar este anuncio?',
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
	                ajax.send("ctrl=anuncio&acti=eliminar&id=" + id);
	            },
	            cancel: function() {
	                $.alert('Has cancelado la eliminación');
	            }
	        }
	    });

	}


	function InsertAnuncio() {
	    var result = document.getElementById('tview');

	    var titulo = document.formulario.titulo.value;
	    var descrp = document.formulario.descrp.value;
	    var fchfin = document.formulario.fchfin.value;
	    var usuid = document.formulario.usuid.value;
	    var ficid = document.formulario.ficid.value;

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
	    ajax.send("ctrl=anuncio&acti=insertar&titulo=" + titulo + "&descrp=" + descrp + "&fchfin=" + fchfin + "&usuid=" + usuid + "&ficid=" + ficid);

	    
	}





	function EditarAnuncio(id, titulo, descrp, fchfin, usuid, ficid) {

	    document.formulario.id.value = id;
	    document.formulario.titulo.value = titulo;
	    document.formulario.descrp.value = descrp;
	    document.formulario.fchfin.value = fchfin;
	    document.formulario.usuid.value = usuid;
	    document.formulario.ficid.value = ficid;

	    document.getElementById("btnguardar").innerHTML = "Actualizar";
	    document.getElementById("titlemodalanuncios").innerHTML = "Editar Anuncios";

	}


	function UpdateAnuncio() {

	    var result = document.getElementById('tview');

	    var titulo = document.formulario.titulo.value;
	    var descrp = document.formulario.descrp.value;
	    var fchfin = document.formulario.fchfin.value;
	    var usuid = document.formulario.usuid.value;
	    var ficid = document.formulario.ficid.value;
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
	    ajax.send("ctrl=anuncio&acti=actualizar&titulo=" + titulo + "&descrp=" + descrp + "&fchfin=" + fchfin + "&usuid=" + usuid + "&ficid=" + ficid + "&id=" + id);


	    document.getElementById("btnguardar").innerHTML = "Crear";
	    document.getElementById("titlemodalanuncios").innerHTML = "Crear Anuncios";
	    
	}

	function CancelarAnuncio() {
	    // document.getElementById('formulario').reset();
	    document.getElementById("btnguardar").innerHTML = "Crear";
	    document.getElementById("titlemodalanuncios").innerHTML = "Crear Anuncios";
	}