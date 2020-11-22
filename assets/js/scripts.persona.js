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


	function BorrarPersona(id)
	{
		var result = document.getElementById('tview');

		const ajax = new XMLHttpRequest(); // Ojo Se puede Llamar la funcion CrearAjax();
		ajax.open("POST","main.php",true); // Se usa el Controlador General y su Accion
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
		ajax.send("ctrl=persona&acti=eliminar&id="+id);
	}


	function InsertPersona()
	{
		var result = document.getElementById('tview');

		var nombre   	= document.formpersona.nombre.value;
		var apellido   	= document.formpersona.apellido.value;
		var documento   = document.getElementById('tipDoc').value;
		var numero      = document.getElementById('numero').value;
		var direccion   = document.formpersona.direccion.value;
		var correo    	= document.formpersona.correo.value;


		const ajax = new XMLHttpRequest(); // Ojo Se puede Llamar la funcion CrearAjax();
		ajax.open("POST","main.php",true); // Se usa el Controlador General y su Accion
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
		ajax.send("ctrl=persona&acti=insertar&nombre="+nombre+"&apellido="+apellido+"&documento="+documento+"&numero="+numero+"&direccion="+direccion+"&correo="+correo+"&numero"+numero);
	
		document.getElementById('formpersona').reset();
	}





	function EditarPersona(id,nombre,apellido,correo,direccion,documento,numero)
	{

		document.formpersona.id.value = id;
	    document.formpersona.nombre.value = nombre;
		document.formpersona.apellido.value = apellido;
		document.getElementById('tipDoc').value = documento;
		document.getElementById('numero').value = numero;
		document.formpersona.direccion.value = direccion;
		document.formpersona.correo.value = correo;
		
		document.getElementById("btnguardar").value = "Actualizar";
		document.getElementById("btnguardar").setAttribute("onclick", "UpdatePersona();");
		
	
	}


	function UpdatePersona()
	{

		var result = document.getElementById('tview');

		var nombre   	= document.formpersona.nombre.value;
		var apellido   	= document.formpersona.apellido.value;
		var documento   = document.getElementById('tipDoc').value;
		var numero		= document.getElementById('numero').value; 
		var direccion   = document.formpersona.direccion.value;
		var correo    	= document.formpersona.correo.value;
		var id   		= document.formpersona.id.value;

		alert(documento);

		document.getElementById('formpersona').reset();

		const ajax = new XMLHttpRequest(); 
		ajax.open("POST","main.php",true); 
		ajax.onreadystatechange = function (){
												if( ajax.readyState == 4 ) 
												{
													if( ajax.status == 200 )
													{
														result.innerHTML = ajax.responseText;
														document.getElementById("btnguardar").value = "Guardar";

														
													}
													else { console.log("Ups, Me equivoque;"); }
												}
											 };
		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		ajax.send("ctrl=persona&acti=actualizar&nombre="+nombre+"&apellido="+apellido+"&documento="+documento+"&numero="+numero+"&direccion="+direccion+"&correo="+correo+"&id="+id);
	
		document.getElementById("btnguardar").setAttribute("onclick", "InsertPersona();");									 
	}