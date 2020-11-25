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
	                    if (ajax.readyState == 4) 
	                    {
	                        if (ajax.status == 200) 
	                        {

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

	    var titulo = document.formanuncio.titulo.value;
	    var descrp = document.formanuncio.descrp.value;
	    var fchfin = document.formanuncio.fchfin.value;
	    var usuid = document.formanuncio.usuid.value;
	    var ficid = document.formanuncio.ficid.value;

	    const ajax = new XMLHttpRequest(); 
	    ajax.open("POST", "main.php", true); 
	    ajax.onreadystatechange = function() {
	        if (ajax.readyState == 4) 
	        {
	            if (ajax.status == 200) 
	            {

	                result.innerHTML = ajax.responseText;

	            } else {
	                console.log("Ups, Me equivoque;");
	            }
	        }
	    };

	    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	    ajax.send("ctrl=anuncio&acti=insertar&titulo=" + titulo + "&descrp=" + descrp + "&fchfin=" + fchfin + "&usuid=" + usuid + "&ficid=" + ficid);

	    document.getElementById('formanuncio').reset();
	}





	function EditarAnuncio(id, titulo, descrp, fchfin, usuid, ficid) {

	    document.formanuncio.id.value = id;
	    document.formanuncio.titulo.value = titulo;
	    document.formanuncio.descrp.value = descrp;
	    document.formanuncio.fchfin.value = fchfin;
	    document.formanuncio.usuid.value = usuid;
	    document.formanuncio.ficid.value = ficid;

	    document.getElementById("btnguardar").innerHTML = "Actualizar";
	    

	    
	}


	function UpdateAnuncio() {

	    var result = document.getElementById('tview');

	    var titulo = document.formanuncio.titulo.value;
	    var descrp = document.formanuncio.descrp.value;
	    var fchfin = document.formanuncio.fchfin.value;
	    var usuid = document.formanuncio.usuid.value;
	    var ficid = document.formanuncio.ficid.value;
	    var id = document.formanuncio.id.value;

	    document.getElementById('formanuncio').reset();

	    const ajax = new XMLHttpRequest(); 
	    ajax.open("POST", "main.php", true); 
	    ajax.onreadystatechange = function() {
	        if (ajax.readyState == 4) 
	        {
	            if (ajax.status == 200) 
	            {
	                result.innerHTML = ajax.responseText;
	                document.getElementById("btnguardar").innerHTML = "Crear";

	                
	                

	            } else { console.log("Ups, Me equivoque;"); }
	        }
	    };
	    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	    ajax.send("ctrl=anuncio&acti=actualizar&titulo=" + titulo + "&descrp=" + descrp + "&fchfin=" + fchfin + "&usuid=" + usuid + "&ficid=" + ficid + "&id=" + id);

	    

	    
	    document.getElementById('formanuncio').reset();

	}

	function CancelarAnuncio() {

	    document.getElementById('formanuncio').reset();
		    
	    document.getElementById("btnguardar").innerHTML = "Crear";
	}