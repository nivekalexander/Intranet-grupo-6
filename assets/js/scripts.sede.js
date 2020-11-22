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

	function BorrarSede(id)
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
		ajax.send("ctrl=sede&acti=eliminar&id="+id);
	}

	function InsertSede()
	{
		var result = document.getElementById('tview');

		var nombr 	= document.formsede.nombre.value;
		var ciudad  = document.getElementById('ciudad').value;	


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
		ajax.send("ctrl=sede&acti=insertar&nombre="+nombr+"&ciudad="+ciudad);

		document.getElementById('formsede').reset();
	}



function EditarSede(id,nombre,ciudad){

		document.formsede.id.value		= id;
		document.formsede.nombre.value 	= nombre;
		document.getElementById('ciudad').value  = ciudad;

		document.getElementById("btnguardar").value = "Actualizar";
;		document.getElementById("btnguardar").setAttribute("onclick", "UpdateSede();");
	}

function UpdateSede(){

		var result = document.getElementById('tview');

		var nombre	= document.formsede.nombre.value;
		var ciudad  = document.getElementById('ciudad').value;
		var id 		= document.formsede.id.value;

		document.getElementById('formsede').reset();

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
		ajax.send("ctrl=sede&acti=actualizar&nombre="+nombre+"&ciudad="+ciudad+"&id="+id);

		document.getElementById("btnguardar").setAttribute("onclick", "InsertSede();");

}