	function ObjAjax()
	{
		var xmlhttp=false;
 		try 	   {			xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");	  } 
		catch (e)  { try 	  {	xmlhttp = new ActiveXObject("Microsoft.XMLHTTP"); }
 					catch (E) {	xmlhttp = false;  } }
 		if (!xmlhttp && typeof XMLHttpRequest!='undefined') 
  				   {			xmlhttp = new XMLHttpRequest();     	          }
		return xmlhttp;
	}


	function BorrarAnuncio(id)
	{
		var result = document.getElementById('tview');

		const ajax = new XMLHttpRequest(); // Ojo Se puede Llamar la funcion CrearAjax();
		ajax.open("POST","views/main.php",true); // Se usa el Controlador General y su Accion
		ajax.onreadystatechange = function (){
												if( ajax.readyState == 4 ) // Estado 4 es DONE = TERMINADO
												{
													if( ajax.status == 200 ) // Estado 200 es SUCCESS = CORRECTO
													{

														result.innerHTML = ajax.responseText;

													}
													else
													{
														console.log("Ups, Me equivoque;");
													}
												}
											 };

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		ajax.send("ctrl=anuncio&acti=eliminar&id="+id);
	}


	function InsertAnuncio()
	{
		var result = document.getElementById('tview');

		var titulo   = document.formanuncio.titulo.value;
		var descrp   = document.formanuncio.descrp.value;
		var fchcre   = document.formanuncio.fchcre.value;
		var fchfin   = document.formanuncio.fchfin.value;
		var usuid    = document.formanuncio.usuid.value;
		var ficid    = document.formanuncio.ficid.value;

		const ajax = new XMLHttpRequest(); // Ojo Se puede Llamar la funcion CrearAjax();
		ajax.open("POST","views/main.php",true); // Se usa el Controlador General y su Accion
		ajax.onreadystatechange = function (){
												if( ajax.readyState == 4 ) // Estado 4 es DONE = TERMINADO
												{
													if( ajax.status == 200 ) // Estado 200 es SUCCESS = CORRECTO
													{

														result.innerHTML = ajax.responseText;

													}
													else
													{
														console.log("Ups, Me equivoque;");
													}
												}
											 };

		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		ajax.send("ctrl=anuncio&acti=insertar&titulo="+titulo+"&descrp="+descrp+"&fchcre="+fchcre+"&fchfin="+fchfin+"&usuid="+usuid+"&ficid="+ficid);
	
		document.getElementById('formanuncio').reset();
	}





	function EditarAnuncio(id,titulo,descrp,fchcre,fchfin,usuid,ficid)
	{

		document.formanuncio.id.value 	  = id;
	    document.formanuncio.titulo.value = titulo;
	    document.formanuncio.descrp.value = descrp;
	    document.formanuncio.fchcre.value = fchcre;
	 	document.formanuncio.fchfin.value = fchfin;
		document.formanuncio.usuid.value  = usuid;
		document.formanuncio.ficid.value  = ficid;
		
		document.getElementById("btnguardar").value = "Actualizar";
		document.getElementById("btnguardar").setAttribute("onclick", "UpdateAnuncio();");
		
		// Cambiar la propiedad DEL FORMULARIO desde javascript de ONSUBMIT() ONCLICK() CAMBIE  -> UPDATEUSUARIO() al boton guardar
	}


	function UpdateAnuncio()
	{

		var result = document.getElementById('tview');

		var titulo  = document.formanuncio.titulo.value;
		var descrp  = document.formanuncio.descrp.value;
		var fchcre  = document.formanuncio.fchcre.value;
		var fchfin  = document.formanuncio.fchfin.value;
		var usuid   = document.formanuncio.usuid.value;
		var ficid   = document.formanuncio.ficid.value;
		var id   	= document.formanuncio.id.value;

		document.getElementById('formanuncio').reset();

		const ajax = new XMLHttpRequest(); // Ojo Se puede Llamar la funcion CrearAjax();
		ajax.open("POST","views/main.php",true); // Se usa el Controlador General y su Accion
		ajax.onreadystatechange = function (){
												if( ajax.readyState == 4 ) // Estado 4 es DONE = TERMINADO
												{
													if( ajax.status == 200 ) // Estado 200 es SUCCESS = CORRECTO
													{
														result.innerHTML = ajax.responseText;
														document.getElementById("btnguardar").value = "Guardar";

														// limpiar el formulario
														// document.getElementById("formusuario") --> onlick --> insertusuario()

													}
													else { console.log("Ups, Me equivoque;"); }
												}
											 };
		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		ajax.send("ctrl=anuncio&acti=actualizar&titulo="+titulo+"&descrp="+descrp+"&fchcre="+fchcre+"&fchfin="+fchfin+"&usuid="+usuid+"&ficid="+ficid+"&id="+id);
	
		document.getElementById("btnguardar").setAttribute("onclick", "InsertAnuncio();");									 
	}