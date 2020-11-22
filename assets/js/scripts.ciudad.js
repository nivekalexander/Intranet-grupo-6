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

	function BorrarCiudad(id)
	{
		var result = document.getElementById('tview');

		const ajax = new XMLHttpRequest(); 
		ajax.open("POST","main.php",true); 
		ajax.onreadystatechange = function (){
												if( ajax.readyState == 4 ) 
												{
													if( ajax.status == 200 )
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
		ajax.send("ctrl=ciudad&acti=eliminar&id="+id);
	}

	function InsertCiudad()
	{
		var result = document.getElementById('tview');

		var nombr 	= document.formciudad.nombre.value;
		var departament  = document.getElementById('departament').value;	

		const ajax = new XMLHttpRequest(); 
		ajax.open("POST","main.php",true); 
		ajax.onreadystatechange = function (){
												if( ajax.readyState == 4 ) 
												{
													if( ajax.status == 200 ) 
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
		ajax.send("ctrl=ciudad&acti=insertar&nombre="+nombr+"&departament="+departament);

		document.getElementById('formciudad').reset();
	}



function EditarCiudad(id,nombre,departament){

		document.formciudad.id.value		= id;
		document.formciudad.nombre.value 	= nombre;
		document.getElementById('departament').value  = departament;

		document.getElementById("btnguardar").value = "Actualizar";
;		document.getElementById("btnguardar").setAttribute("onclick", "UpdateCiudad();");
	}

function UpdateCiudad(){

		var result = document.getElementById('tview');

		var nombre	= document.formciudad.nombre.value;
		var departament  = document.getElementById('departament').value;
		var id 		= document.formciudad.id.value;

		document.getElementById('formciudad').reset();

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
		ajax.send("ctrl=ciudad&acti=actualizar&nombre="+nombre+"&departament="+departament+"&id="+id);

		document.getElementById("btnguardar").setAttribute("onclick", "InsertCiudad();");

}