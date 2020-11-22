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

	function BorrarPais(id)
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
		ajax.send("ctrl=pais&acti=eliminar&id="+id);
	}

	function InsertPais()
	{
		var result = document.getElementById('tview');

		var nombr 	= document.formpais.nombre.value;
		var postal  = document.formpais.postal.value;	

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
		ajax.send("ctrl=pais&acti=insertar&nombre="+nombr+"&postal="+postal);

		document.getElementById('formpais').reset();
	}



function EditarPais(id,nombre,postal){

		document.formpais.id.value		= id;
		document.formpais.nombre.value 	= nombre;
		document.formpais.postal.value  = postal;
		document.getElementById("btnguardar").value = "Actualizar";

		document.getElementById("btnguardar").setAttribute("onclick", "UpdatePais();");
	}

function UpdatePais(){

		var result = document.getElementById('tview');

		var nombre	= document.formpais.nombre.value;
		var postal  = document.formpais.postal.value;
		var id 		= document.formpais.id.value;

		document.getElementById('formpais').reset();

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
		ajax.send("ctrl=pais&acti=actualizar&nombre="+nombre+"&postal="+postal+"&id="+id);

		document.getElementById("btnguardar").setAttribute("onclick", "InsertPais();");

}